@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
<div>
    <!-- @if (count($tasks))
        <p>Here is your current tasks:</p>
        @foreach ($tasks as $task)
            <div>{{ $task -> id }}</div>
            <div>{{ $task -> title }}</div>
        @endforeach
    @else
    <div>Congratulation! You have no tasks!</div>
    @endif -->
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>Congratulation! You have no tasks!</div>
    @endforelse
</div>
@endsection

