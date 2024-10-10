@extends('template.template')

@section('layout_content')

<!-- Event Detail Card -->
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <!-- Event Title -->
        <h1 class="text-3xl font-bold text-black mb-4">{{$event->title}}</h1>

                <!-- Event Type -->
                <p class="font-bold text-gray-600">{{ $event->event_category->name}}</p>

        <!-- Event Image -->
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgsBertnD_Gdir98qYjTr8g7B1Vrc7rHlrPA&s" 
        alt="Event Image" 
        class="w-full h-auto object-cover rounded-lg mb-4">

        <!-- Organizer and Booking URL -->
        <div class="flex justify-between items-center mb-4">
            <div>
                <h3 class="text-lg font-semibold">Organizer</h3>
                <p class="text-gray-600">{{$event->organizer->name}}</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold">Booking URL</h3>
                <a href="https://www.indonesiaexpo.com/booking" class="text-blue-600 underline">{{$event->booking_url}}</a>
            </div>
        </div>

        <!-- Date, Time and Location -->
        <div class="flex justify-between items-center mb-4">
            <div>
                <h3 class="text-lg font-semibold">Date and Time</h3>
                <p class="text-gray-600">{{$event->date}}</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold">Location</h3>
                <p class="text-gray-600">{{$event->venue}}</p>
            </div>
        </div>

        <!-- About This Event -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold">About This Event</h3>
            <p class="text-gray-600">
            {{$event->description}}
            </p>
        </div>

        <!-- Tags and Back Button -->
        <div class="mt-4 flex justify-between items-center">
            <div class="flex space-x-2">
                <span class="bg-lime-300 text-gray-700 px-3 py-1 rounded-full text-sm">{{$event->tags}}</span>
                <span class="bg-lime-300 text-gray-700 px-3 py-1 rounded-full text-sm">{{$event->tags}}</span>
            </div>
            <a href="/event" class="bg-blue-300 text-black py-2 px-4 rounded shadow hover:bg-gray-400">Back</a>
        </div>
    </div>

    @endsection