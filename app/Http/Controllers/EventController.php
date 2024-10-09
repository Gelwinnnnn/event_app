<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Models\Event;
use App\Models\Organizer;

class EventController extends Controller
{
    public function showAllEvent(){
        $events = Event::all();
        return view('event', [
            'events' => $events
        ]);
    }

    public function showEventDetail(int $id){
        $event = Event::find($id);
        return view('eventDetail', [
            'event' => $event
        ]);
    }
}
