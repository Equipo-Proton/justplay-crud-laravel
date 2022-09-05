<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubscriptionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;
    public function test_no_login_no_inscription()
    {
        $event=Event::factory()->create();

        $response = $this->get(route('inscribe',$event->id));

        $response->assertStatus(302)
                ->assertRedirect("/login");

    }
   
    public function test_auth_user_inscription()
    {
        $event=Event::factory()->create();
        $user=User::factory()->create();

        $this->actingAs($user);

        $response = $this->get(route('inscribe',$event->id));

        $this->assertEquals($user->id,$event->user[0]->id);
    }
    

    public function test_auth_user_cancel_inscription()
    {
        $event = Event::factory()->create();
        $user = User::factory()->create();
        
        $this->actingAs($user);
        $response = $this->get(route('inscribe',$event->id));

        $this->assertEquals($user->id, $event->user[0]->id);

        $this->actingAs($user);
        $response = $this->get(route('cancelInscription',$event->id));

        $this->assertNotEquals(0, $event->user);
    }
    
   /*  public function test_userCantInscribeOnFullEvent()
    {
        $event = Event::factory()->create(['spaces' => 0]);
        $user = User::factory()->create();

        $this->actingAs($user);
        $response = $this->get(route('inscribe', $event->id));

        $this->assertEquals(0, $event->user);
        $this->assertEquals(0, $event->spaces);
    } */
}
