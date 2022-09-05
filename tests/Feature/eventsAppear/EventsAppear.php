<?php

namespace Tests\Feature;

use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventsAppear extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_current_events_in_home_page()
    {
        $this->withExceptionHandling();

        $events = Event::factory()->create([
            'title' => 'Tennis Match',
            'spaces' => 12,
            'event_date' => '2022-12-12',
        ]);

        $response = $this->get('/');
        $response->assertStatus(200)
            ->assertViewIs('home')
            ->assertSee('Tennis Match');
    }

    public function test_past_events_in_past_page()
    {
        $this->withExceptionHandling();
        
        $events = Event::factory()->create([
            "title" => "Football Match",
            'spaces' => 12,
            'event_date' => '2000-12-12',
        ]);
        $response = $this->get('/past');
        $response->assertStatus(200)
            ->assertViewIs('pastevents')
            ->assertSee('Football Match');
    }

    
}
