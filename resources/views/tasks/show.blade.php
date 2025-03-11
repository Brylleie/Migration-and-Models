@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Task Details</h1>

    <div class="mb-6">
        <!-- Task Title -->
        <h2 class="text-xl font-semibold text-gray-900">{{ $task->title }}</h2>
        
        <!-- Task Description -->
        <p class="text-gray-600 mt-2">{{ $task->description }}</p>

        <!-- Task Status -->
        <div class="mt-4">
            <span class="px-3 py-1 text-sm font-semibold {{ $task->is_completed ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }} rounded-full">
                {{ $task->is_completed ? 'Completed' : 'Pending' }}
            </span>
        </div>

        <!-- Created & Updated Time -->
        <div class="mt-4 text-sm text-gray-500 border-t pt-3">
            <p><strong>Created:</strong> {{ $task->created_at->format('M d, Y - H:i A') }}</p>
            <p><strong>Updated:</strong> {{ $task->updated_at->format('M d, Y - H:i A') }}</p>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex justify-between">
        <a href="{{ route('tasks.edit', $task->id) }}" 
           class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
            Edit Task
        </a>
        <a href="{{ route('tasks.index') }}" 
           class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
            Back to List
        </a>
    </div>
</div>
@endsection
