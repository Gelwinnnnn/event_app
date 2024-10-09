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
            'name'=> $newOrganizer['name'],
            'description' => $newOrganizer['description'],
            'facebook_link' => $newOrganizer['facebook_link'],
            'x_link' => $newOrganizer['x_link'],
            'website_link' => $newOrganizer['website_link'],
        ]);
        return redirect('/organizerList');
    }

    public function showAllOrganizer(){
        $organizers = Organizer::all();
        return view('organizerList', [
            'organizers' => $organizers
        ]);
    }

    public function deleteOrganizer(int $id){
        $organizer = Organizer::find($id);
        $organizer->delete();
        return redirect('/organizerList');
    }
}