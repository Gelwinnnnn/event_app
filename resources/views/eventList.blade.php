@extends('template.template')

@section('layout_content')

<!-- Event List -->
<div class="max-w-full mx-auto bg-white p-6 rounded-lg shadow-lg">
    <!-- Title -->
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Events List</h1>
        <a href="/createEvent" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Create</a>
    </div>

    <!-- Responsive Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full table-auto text-left">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Location</th>
                    <th class="px-4 py-2">Organizer</th>
                    <th class="px-4 py-2">About</th>
                    <th class="px-4 py-2">Tags</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $index => $event)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $index + 1 }}</td>
                    <td class="px-4 py-2">{{ $event->title }}</td>
                    <td class="px-4 py-2">{{ \Carbon\Carbon::parse($event->date)->format('D, M d Y h:i A') }}</td>
                    <td class="px-4 py-2">{{ $event->venue }}</td>
                    <td class="px-4 py-2">{{ $event->organizer->name }}</td>
                    <td class="px-4 py-2">
                        <div class="truncate max-w-xs">
                            {{ Str::limit($event->description, 50) }}
                        </div>
                    </td>
                    <td class="px-4 py-2">
                        <span class="inline-block bg-gray-200 text-gray-700 text-sm px-2 py-1 rounded-full">{{ $event->tags }}</span>
                    </td>
                    <td class="px-4 py-2">
                        <div class="flex items-center space-x-2">
                            <!-- Edit Button -->
                            <a href="/updateEvent/{{ $event->id }}"  class="flex items-center bg-orange-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-orange-600">
                                <!-- Pencil SVG Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v6m-3 3h6l4 4-4-4H9v-2H6l-3 3 4-4h2v-1a1 1 0 0 1 1-1h3v1z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7h6v6h-6z" />
                                </svg>
                                Edit
                            </a>




                            <!-- Delete Button -->
                            <form action="/deleteEvent/{{ $event->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
