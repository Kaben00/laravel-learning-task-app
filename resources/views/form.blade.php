@extends('layouts.app')

@section('title', isset($task) ? 'Edit task' : 'Add new task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-style: italic;
            font-size: 12px;
        }
    </style>
@endsection
    
@section('content')
    <form method="post" action="{{ isset($task) ? route('tasks.update', ['task' => $task -> id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div>
            <label for="title">Task Name</label>
            <input text="text" name="title" id="title" value="{{ $task->title ?? old('title') }}">
            @error('title')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Desciption</label>
            <textarea name="long_description" id="long_description" rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">
            @isset($task)
                Update Task
            @else
                Add Task
            @endisset
        </button>
    </form>
@endsection