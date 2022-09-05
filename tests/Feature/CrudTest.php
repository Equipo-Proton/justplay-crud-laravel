<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;
    
    // read test
    public function test_list_event_appear_in_homepage()
    {
        $this->withExceptionHandling();

        $events = Event::factory(2)->create();
        $event = $events[0];

        $response = $this->get('/');
        $response->assertStatus(200)
            ->assertViewIs('home');
        $response->assertSee($event->name);
    }

    // delete test
    public function test_an_event_can_be_deleted()
    {
        $this->withExceptionHandling();

        $event = Event::factory()->create();
        $this->assertCount(1, Event::all());

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response = $this->delete(route('delete', $event->id));
        $this->assertCount(1, Event::all());

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response = $this->delete(route('delete', $event->id));
        $this->assertCount(0, Event::all());
    }

    // create test
    public function test_an_event_can_be_created()
    {
        $this->withExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response = $this->post(route('storeEvent', [
            'title' => 'title',
            'description' => 'description',
            'img' => 'img',
            'spaces' => 'spaces',
            'event_date' => 'event_date'
        ]));

        $this->assertCount(1, Event::all());

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response = $this->post(route('storeEvent', [
            'title' => 'title',
            'description' => 'description',
            'img' => 'img',
            'spaces' => 'spaces',
            'event_date' => 'event_date'
        ]));

        $this->assertCount(1, Event::all());

    }


    // edit test
    public function test_an_event_can_be_updated()
    {
        $this->withExceptionHandling();

        
        $event = Event::factory()->create();

        $this->assertCount(1,Event::all());
        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response = $this->patch(route('updateEvent', $event->id), ['title' => 'New Name']);

        $this->assertEquals('New Name', Event::first()->title);

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response = $this->patch(route('updateEvent', $event->id), ['title' => 'New Name No Admin']);

        $this->assertEquals('New Name', Event::first()->title);
    }
    
    public function test_an_event_appear_in_show_page(){

        $this->withExceptionHandling();

        $event = Event::factory()->create();

        // $response = $this->get('/show/{id}');
        $response = $this->get(route('showEvent', $event->id));
        $response->assertStatus(200)
            ->assertViewIs('show');

        $response->assertSee($event->name);
    }

    public function test_a_user_can_subscribe()
    {
        $event = Event::factory()->create();
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        
        $this->actingAs($user1);
        $response = $this->get(route('inscribe',$event->id));

        $this->actingAs($user2);
        $response = $this->get(route('inscribe',$event->id));

        $this->assertEquals($user2->id, $event->user[1]->id);
    }

    public function test_a_user_can_unsubscribe()
    {
        $event = Event::factory()->create();
        $user = User::factory()->create();
        
        $this->actingAs($user);
        $response = $this->get(route('inscribe',$event->id));

        $this->assertEquals($user->id, $event->user[0]->id);

        $this->actingAs($user);
        $response = $this->get(route('cancelInscription',$event->id));

        $this->assertNotEquals($event->user, 0);
    }
    
    public function test_userCantInscribeOnFullEvent()
    {
        $event = Event::factory()->create(['spaces' => 0]);
        $user = User::factory()->create();

        $this->actingAs($user);
        $response = $this->get(route('inscribe', $event->id));

        $this->assertNotEquals($event->user, 0);
        $this->assertEquals($event->spaces, 0);
    }
}
