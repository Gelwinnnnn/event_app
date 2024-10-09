<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Models\Event;
use App\Models\Organizer;

class OrganizerController extends Controller
{
    public function createOrganizer(Request $request){
        $newOrganizer = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'facebook_link' => 'required',
            'x_link' => 'required',
            'website_link' => 'required'
        ]);

        $organizer = Organizer::create([
            'cat_name'=> $newcat['cat_name'],
            'color' => $newcat['color'],
            'is_adoptable' => $newcat['is_adoptable'] == "1",
            'ras_id' => $newcat['ras_id'],
            'maturity' => $newcat['maturity'],
            'gender' => $newcat['gender'],
            'birthday'=> $newcat['birthday'],
        ]);
    }
}