<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'img',
        'spaces',
        'event_date',
        'carousel',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    static function getTotalUsersOfEvent($events) {
        foreach($events as $event) {
            $eventSpaces = $event->spaces;
            $numberOfUsers = count($event->user);
            $event->spaces = $eventSpaces - $numberOfUsers;
        }
        return $events;
    }
   
}
