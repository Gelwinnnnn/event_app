@extends('template.template')

@section('layout_content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md max-w-lg w-full">
        <h1 class="text-2xl font-bold mb-6 text-center">Event Category</h1>
        <form action="/createEventCategory" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Event Name -->
            <div class="mb-4">
                <label for="eventCategoryName" class="block text-sm font-medium text-gray-700">Event Category Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Buttons -->
            <div class="flex justify-between">
                <button type="submit" class="bg-indigo-600 text-white py-2 px-4 rounded shadow hover:bg-indigo-700">Save</button>
                <a href="/eventCategoryList" class="bg-gray-300 text-black py-2 px-4 rounded shadow hover:bg-gray-400">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
