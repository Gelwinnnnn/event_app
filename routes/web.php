<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrganizerController;

// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\ControllerCertification;
// use App\Http\Controllers\ControllerEvent;
// use App\Http\Controllers\ControllerRas;
// use App\Http\Controllers\ControllerTeam;
// use App\Http\Controllers\ControllerCat;
// use App\Http\Controllers\ControllerUser;
// use App\Http\Controllers\ControllerCatndiptransactions;
// use App\Http\Controllers\ControllerNomnomenergytransactions;

Route::get('/', [EventController::class, 'showAllEvent']);

Route::get('/eventDetail/{event_id}', [EventController::class, 'showEventDetail']);

Route::get('/organizerList', [OrganizerController::class, 'showAllOrganizer']);

Route::get('/createOrganizer',function(){
    return view('createOrganizer'
);
});

Route::post('/createOrganizer',  [OrganizerController::class, 'createOrganizer']);

Route::delete('/deleteOrganizer/{organizer_id}', [OrganizerController::class, 'deleteOrganizer']);