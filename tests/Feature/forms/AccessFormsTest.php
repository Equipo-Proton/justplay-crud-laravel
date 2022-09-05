<?php

namespace Tests\Feature;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccessFormsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_access_create_form_no_admin()
    {
        $this->withExceptionHandling();

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);

        $response = $this->actingAs($userNoAdmin)->get('/create');

        $response->assertStatus(302)
            ->assertRedirect('home');
    }

    public function test_access_create_form_admin()
    {
        $this->withExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin'=>true]);

        $response = $this->actingAs($userAdmin)->get('/create');

        $response->assertStatus(200)
            ->assertViewIs('create');
    }

    public function test_access_update_form_no_admin()
    {
        $this->withExceptionHandling();

        $event = Event::factory()->create();

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);

        $response = $this->actingAs($userNoAdmin)->get(route('editEvent', $event->id));
       
        $response->assertStatus(302)
            ->assertRedirect('home');
    }

    public function test_access_update_form_admin()
    {
        $this->withExceptionHandling();

        $event = Event::factory()->create();

        $userAdmin = User::factory()->create(['isAdmin'=>true]);

        $response = $this->actingAs($userAdmin)->get(route('editEvent', $event->id));

        $response->assertStatus(200)
            ->assertViewIs('edit');
    }
    
}
