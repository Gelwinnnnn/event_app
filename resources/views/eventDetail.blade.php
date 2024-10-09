@extends('template.template')

@section('layout_content')

<!-- Event Detail Card -->
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <!-- Event Type -->
        <h2 class="text-xl font-semibold text-gray-700">{{$event->organizer->name}}</h2>

        <!-- Event Title -->
        <h1 class="text-3xl font-bold text-black mb-4">{{$event->title}}</h1>

        <!-- Event Image -->
        <img src="your-image-url-here" alt="Event Image" class="w-full h-64 object-cover rounded-lg mb-4">

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

        <!-- Tags -->
        <div class="mt-4">
            <h3 class="text-lg font-semibold">Tags</h3>
            <div class="flex space-x-2">
                <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Surabaya Science & Tech Events</span>
                <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm">Innovation Challenge</span>
            </div>
        </div>
    </div>

    @endsection