<?php


namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        //creacion de eventos para presentacion

        Event::factory()->create(['title' => 'PADDLE', 'description' => 'If you like paddle tennis and want to meet new people, come to this padel meeting on September 5, 2022 at the Oviedo sports center', 'img' => 'https://cdn.pixabay.com/photo/2021/09/10/06/47/paddle-tennis-6612340_1280.jpg', 'spaces' => 10, 'event_date' => '2022-09-07']);
        Event::factory()->create(['title' => 'CHESS TOURNAMENT', 'description' => 'Next September 5, we will celebrate a Chess tournament, if you are willing to participate, sign up now!. It will be held in the house of Culture of Aviles  ', 'img' => 'https://cdn.pixabay.com/photo/2018/11/20/13/36/composing-3827454_1280.jpg', 'spaces' => 1, 'event_date' => '2022-09-07']);
        Event::factory()->create(['title' => 'INITIATION TO BOXING', 'description' => 'We will meet a group of people to enjoy boxing. The event will be held at the Osito Feliz gym in the town of Gijón', 'img' => 'https://cdn.pixabay.com/photo/2012/10/25/23/32/boxing-62867_1280.jpg', 'spaces' => 8, 'event_date' => '2022-09-07']);
        Event::factory()->create(['title' => 'FOOTBALL MATCH FOR THE 3RD AGE', 'description' => 'We will celebrate a soccer game on Sunday September 12, we all have the right to enjoy.', 'img' => 'https://i.postimg.cc/9Fys99cw/active-senior-men-thanking-each-other-after-match-men-with-grey-hair-in-sport-clothes-standing-in-ro.jpg', 'spaces' => 1, 'event_date' => '2022-09-12']);
        Event::factory()->create(['carousel' => 1, 'title' => 'SWIMMING TECHNIQUES', 'description' => 'We are going to teach and learn swimming techniques and enjoy at the same time with new people in the Pola de Laviana pool', 'img' => 'https://cdn.pixabay.com/photo/2013/02/09/04/23/swimmers-79592_1280.jpg', 'spaces' => 15, 'event_date' => '2022-09-10']); 
        Event::factory()->create(['carousel' => 1, 'title' => 'FOOTBALL FOR KIDS', 'description' => 'If you want to see your children enjoy, come to the soccer celebration for children and let them play and have fun, on the soccer field of the SMRA council', 'img' => 'https://cdn.pixabay.com/photo/2017/06/26/19/53/team-2444978_1280.jpg', 'spaces' => 15, 'event_date' => '2022-09-25']);
        Event::factory()->create(['carousel' => 0, 'title' => 'TENNIS PRACTICE', 'description' => 'If you want to practice tennis, you can stay with us and together we will learn new techniques that will help you to be more professional and enjoy a pleasant afternoon. We meet at the Gijón Sports Center.', 'img' => 'https://cdn.pixabay.com/photo/2014/03/16/13/43/kim-clijsters-288567_1280.jpg', 'spaces' => 6, 'event_date' => '2022-11-3']);
        Event::factory()->create(['carousel' => 0, 'title' => 'AN 5 KM MINI-MARATHON', 'description' => 'We will celebrate a 5 km mini-marathon through the town of Gijón. the meeting point will be the town hall square.', 'img' => 'https://cdn.pixabay.com/photo/2015/10/03/21/58/sport-970443_1280.jpg', 'spaces' => 20, 'event_date' => '2022-12-5']);
        Event::factory()->create(['title' => 'ARCHERY COMPETITION', 'description' => 'In Avilés at the fairgrounds, we will do an archery competition for beginners, to modify the necessary techniques and have some laughs', 'img' => 'https://cdn.pixabay.com/photo/2014/09/25/00/43/target-459833_1280.jpg', 'spaces' => 12, 'event_date' => '2022-09-30']);
        Event::factory()->create(['title' => 'SURFING', 'description' => 'We will meet to go surfing at the beautiful beach of Rodiles. We will go 10 people to make the event a safe event.', 'img' => 'https://cdn.pixabay.com/photo/2019/08/07/09/58/surfers-4390427_1280.jpg', 'spaces' => 10, 'event_date' => '2022-08-20']);
        Event::factory()->create(['title' => 'MONTAIN ROUTE', 'description' => 'If you feel like doing the Ruta del Alba, we are waiting for you next Sunday, September 25, in Soto de Agües.', 'img' => 'https://www.turismoasturias.es/documents/11022/41610/RutaDelAlba1.jpg', 'spaces' => 20, 'event_date' => '2022-07-30']);
        Event::factory()->create(['title' => 'CYCLING MINI TOUR', 'description' => 'We will celebrate a mini cycling tour with a group of people to enjoy the sport with new people. This tour will take place in the municipality of Aviles.', 'img' => 'https://cdn.pixabay.com/photo/2016/11/22/23/49/cyclists-1851269_1280.jpg', 'spaces' => 1, 'event_date' => '2022-09-02']);
        Event::factory()->create(['title' => 'Event test', 'description' => 'Learn by doing with our JS game', 'img' => 'https://via.placeholder.com/640x480.png/00ff44?text=commodi', 'spaces' => 11, 'event_date' => '2000-11-09']);
        Event::factory()->create(['title' => 'Event test', 'description' => 'Scrum webinar', 'img' => 'https://via.placeholder.com/640x480.png/00ff44?text=commodi', 'spaces' => 16, 'event_date' => '2021-11-09']);
        Event::factory()->create(['title' => 'Event test', 'description' => 'Learn JavaScript', 'img' => 'https://via.placeholder.com/640x480.png/00ff44?text=commodi', 'spaces' => 8, 'event_date' => '2000-11-09']);
        Event::factory()->create(['title' => 'Event test', 'description' => 'Learn by doing with our JS game', 'img' => 'https://via.placeholder.com/640x480.png/00ff44?text=commodi', 'spaces' => 9, 'event_date' => '2021-11-09']);
        Event::factory()->create(['title' => 'Event test', 'description' => 'Learn JavaScript', 'img' => 'https://via.placeholder.com/640x480.png/00ff44?text=commodi', 'spaces' => 8, 'event_date' => '2000-11-09']);
        Event::factory()->create(['title' => 'Event test', 'description' => 'Learn JavaScript', 'img' => 'https://via.placeholder.com/640x480.png/00ff44?text=commodi', 'spaces' => 8, 'event_date' => '2002-11-09']);
        Event::factory()->create(['title' => 'Event test', 'description' => 'Learn JavaScript', 'img' => 'https://via.placeholder.com/640x480.png/00ff44?text=commodi', 'spaces' => 8, 'event_date' => '2001-11-09']);
        Event::factory()->create(['title' => 'Event test', 'description' => 'Learn JavaScript', 'img' => 'https://via.placeholder.com/640x480.png/00ff44?text=commodi', 'spaces' => 8, 'event_date' => '2000-11-09']);

        User::factory()->create(['name'=>'admin', 'email'=>'admin@admin.com', 'isAdmin'=>true]);
        User::factory()->create(['name'=>'user1', 'email'=>'user1@user1.com', 'isAdmin'=>false]);
        User::factory()->create(['name'=>'user2', 'email'=>'user2@user2.com', 'isAdmin'=>false]);
        /* Event::factory()
            ->has(User::factory()->count(20))
            ->create();

        User::factory()
        ->has(Event::factory()->count(20))
        ->create(); */
    }
}
