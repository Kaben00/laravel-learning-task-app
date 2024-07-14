@extends('layouts.app')

@section('title', $task -> title)   

@section('content')
<p>{{ $task -> description }}</p>
@if ($task -> long_description)
    <p>{{ $task -> long_description }}</p>
@endif

<p>{{ $task -> created_at }}</p>
<p>{{ $task -> updated_at }}</p>

<p>
    @if($task->completed)
        Completed
    @else
        Not Completed
    @endif
</p>

<div>
    <a href="{{ route('tasks.create') }}">Add Task!</a>
</div>

<div>
    <form action="{{ route('tasks.destroy', ['task'=>$task->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="rounded-full  mt-3 bg-sky-500 hover:bg-sky-700 p-4">DELETE</button>
    </form>
</div>

<div>
    <form action="{{ route('tasks.toggle-complete', ['task'=>$task->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit" class="rounded-full mt-3 bg-sky-500 hover:bg-sky-700 p-4">Mark as {{ $task->completed ? 'Completed' : 'Not Completed' }}</button>
    </form>
</div>

@endsection