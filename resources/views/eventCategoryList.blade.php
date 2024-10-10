@extends('template.template')

@section('layout_content')

<!-- Event Category List -->
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <!-- Title -->
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Event Category List</h1>
            <a href = "/createEventCategory" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Create</a>
        </div>

        <!-- Table -->
        <table class="table-auto w-full text-left">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Event Category Name</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($event_categories as $index => $event_category)
                <tr class="border-b">
                    <td class="px-4 py-2">{{$index+1}}</td>
                    <td class="px-4 py-2">{{$event_category->name}}</td>

                    <td class="px-4 py-2">
                        <div class="flex items-center space-x-2">
                            <!-- Edit Button -->
                            <a href="/updateEventCategory/{{$event_category->id}}" class="flex items-center bg-orange-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-orange-600">
                                <!-- Pencil SVG Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5h2v7h3l-4 4-4-4h3V5z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l-4 4 4-4zM16 7h6v6h-6z" />
                                </svg>
                                Edit
                            </a>

                            <!-- Delete Button -->
                            <form action="/deleteEventCategory/{{$event_category->id}}" method="POST" class="inline-flex items-center px-3 py-2 mx-1 my-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none">
                                @csrf 
                                @method("DELETE")
                                <button class="flex items-center w-full h-fit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
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