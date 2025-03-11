@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Title Input -->
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $task->title }}" required
                   class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
        </div>

        <!-- Description Input -->
        <div>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
            <textarea id="description" name="description" rows="3"
                      class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 focus:outline-none">{{ $task->description }}</textarea>
        </div>

        <!-- Is Completed Checkbox -->
        <div class="flex items-center">
            <input type="checkbox" id="is_completed" name="is_completed" value="1"
                   class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                   {{ $task->is_completed ? 'checked' : '' }}>
            <label for="is_completed" class="ml-2 text-gray-700 text-sm">Mark as Completed</label>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center justify-between">
            <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                Update Task
            </button>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('tasks.index') }}" class="text-blue-500 hover:text-blue-700 text-sm">← Back to List</a>
        </div>
    </form>
</div>
@endsection
