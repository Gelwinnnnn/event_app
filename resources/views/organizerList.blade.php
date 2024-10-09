@extends('template.template')

@section('layout_content')

<!-- Organizer List -->
<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <!-- Title -->
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Organizer List</h1>
            <a href = "/createOrganizer" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">+ Create</a>
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
                    <td class="px-4 py-2">{{$organizer->name}}</td>
                    <td class="px-4 py-2">{{$organizer->description}}</td>
                    <td class="px-4 py-2">
                        <button class="text-yellow-500 hover:text-yellow-600 mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M17.414 2.586a2 2 0 00-2.828 0L9 8.172V10h1.828l5.586-5.586a2 2 0 000-2.828zM8 11H7v2h2v-1H8v-1zm-1 3H7v1h1v-1zm0 2H7v1h1v-1z"/>
                            </svg>
                        </button>

                        <form action="/deleteOrganizer/{{$organizer->id}}" method="POST" class="inline-flex items-center px-3 py-2 mx-1 my-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none">
                            @csrf 
                            @method("DELETE")
                            <button class="w-full h-fit flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection