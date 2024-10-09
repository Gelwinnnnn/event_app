@extends('template.template')

@section('layout_content')

<div class="bg-white p-8 rounded shadow-md max-w-lg w-full">
        <h1 class="text-2xl font-bold mb-6">Organizer</h1>
        <form action="/createOrganizer" method="POST", enctype="multipart/form-data">
            @csrf

            <!-- Organizer Name -->
            <div class="mb-4">
                <label for="organizerName" class="block text-sm font-medium text-gray-700">Organizer Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Social Media Fields -->
            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                    <input type="text" name="facebook_link" id="facebook_link" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="w-1/2">
                    <label for="socialX" class="block text-sm font-medium text-gray-700">X</label>
                    <input type="text" name="x_link" id="x_link" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>
            </div>

            <!-- Website -->
            <div class="mb-4">
                <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
                <input type="text" name="website_link" id="website_link" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- About -->
            <div class="mb-4">
                <label for="about" class="block text-sm font-medium text-gray-700">About</label>
                <textarea name="description" id="description" rows="4" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between">
                <button type="submit" class="bg-indigo-600 text-white py-2 px-4 rounded shadow hover:bg-indigo-700">Save</button>
                <a href="/organizerList"
            class="bg-gray-300 text-black py-2 px-4 rounded shadow hover:bg-gray-400"> Cancel
        </a>
            </div>
        </form>
    </div>
    @endsection