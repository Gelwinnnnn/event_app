@extends('template.template')

@section('layout_content')

<!-- Organizer List -->
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <!-- Title -->
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Organizer List</h1>
        <a href="/createOrganizer" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Create</a>
    </div>

    <!-- Table -->
    <table class="table-auto w-full text-left">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">Organizer Name</th>
                <th class="px-4 py-2">About</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($organizers as $index => $organizer)
            <tr class="border-b">
                <td class="px-4 py-2">{{$index+1}}</td>
                
                <!-- Organizer Name with Link -->
                <td class="px-4 py-2">
                    <a href="/organizerDetail/{{$organizer->id}}" class="text-blue-500 hover:underline">
                        {{$organizer->name}}
                    </a>
                </td>
                
                <td class="px-4 py-2">{{$organizer->description}}</td>
                
                <td class="px-4 py-2">
                    <div class="flex items-center space-x-2">
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
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
