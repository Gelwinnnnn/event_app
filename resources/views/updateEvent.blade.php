@extends('template.template')

@section('layout_content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md max-w-lg w-full">
        <h1 class="text-2xl font-bold mb-6 text-center">Update Event</h1>
        <form action="/updateEvent/{{$event->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Event Name -->
            <div class="mb-4">
                <label for="eventName" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="title" id="title" value="{{ $event->title }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Date -->
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" name="date" id="date" value="{{ $event->date }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Location -->
            <div class="mb-4">
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <input type="text" name="venue" id="venue" value="{{ $event->venue }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Start Time -->
            <div class="mb-4">
                <label for="start_time" class="block text-sm font-medium text-gray-700">Start Time</label>
                <input type="time" name="start_time" id="start_time" value="{{ $event->start_time }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>


            <!-- Organizer -->
            <div class="mb-4">
                <label for="organizer" class="block text-sm font-medium text-gray-700">Organizer</label>
                <select name="organizer_id" id="organizer_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">Select Organizer ...</option>
                    @foreach ($organizers as $organizer)
                    <option value="{{ $organizer->id }}" {{ $organizer->id == $event->organizer_id ? 'selected' : '' }}>
                        {{ $organizer->name }}
                    </option>
                    @endforeach
                </select>
            </div>


            <!-- Booking URL -->
            <div class="mb-4">
                <label for="bookingUrl" class="block text-sm font-medium text-gray-700">Booking URL</label>
                <input type="text" name="booking_url" id="booking_url" value="{{ $event->booking_url }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- About -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">About</label>
                <textarea name="description" id="description" rows="4" value="{{ $event->description }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>

            <!-- Tags -->
            <div class="mb-4">
                <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
                <div class="flex items-center">
                    <input type="text" name="tags" id="tags" value="{{ $event->tags }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
            </div>

            <!-- Event Category -->
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Event Category</label>
                <select name="event_category_id" id="event_category_id" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">Select Event Category ...</option>
                    @foreach ($event_categories as $category)  <!-- Menggunakan $event_categories -->
                    <option value="{{ $category->id }}" {{ $category->id == $event->event_category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>


            <!-- Buttons -->
            <div class="flex justify-between">
                <button type="submit" class="bg-indigo-600 text-white py-2 px-4 rounded shadow hover:bg-indigo-700">Save</button>
                <a href="/eventList" class="bg-gray-300 text-black py-2 px-4 rounded shadow hover:bg-gray-400">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection