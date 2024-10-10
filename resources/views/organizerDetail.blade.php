@extends('template.template')

@section('layout_content')

<!-- Organizer Detail Card -->
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <!-- Organizer Name -->
    <h1 class="text-3xl font-bold text-black mb-4">Detail Organizer</h1>
    
    <!-- Organizer Actions (Edit and Delete) -->
    <div class="flex items-center space-x-2 mb-4">
        <!-- Edit Button -->
        <a href="/updateOrganizer/{{$organizer->id}}" class="flex items-center bg-orange-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-orange-600">
            <!-- Pencil SVG Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5h2v7h3l-4 4-4-4h3V5z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l-4 4 4-4zM16 7h6v6h-6z" />
            </svg>
            Edit
        </a>

        <!-- Delete Button -->
        <form action="/deleteOrganizer/{{$organizer->id}}" method="POST" class="inline-flex items-center">
            @csrf 
            @method("DELETE")
            <button class="bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-800">
                Delete
            </button>
        </form>
    </div>

    <!-- Organizer Name -->
    <h3 class="text-2xl font-semibold mb-4">{{$organizer->name}}</h3>

    <!-- Social Links -->
    <div class="mb-4">
        <p><strong>Facebook:</strong> {{$organizer->facebook_link}}</p>
        <p><strong>X:</strong> {{$organizer->x_link}}</p>
        <p><strong>Website:</strong> {{$organizer->website_link}}</p>
    </div>

    <!-- About Organizer -->
    <div class="mb-4">
        <h3 class="text-lg font-semibold">About</h3>
        <p class="text-gray-600">{{$organizer->description}}</p>
    </div>
</div>

@endsection
