@extends('layouts.app')

@section('title', 'The list of tasks')


@section('content')

<nav class="mb-4">
    <a class="font-medium text-gray-700 underline decoration-pink-500"
        href="{{ route('tasks.create') }}" class="link">Add Task</a>
</nav>

@forelse($tasks as $task)
    <div>
        <a @class(['font-bold', 'line-through'=> $task->completed])
            href="{{ route('tasks.show', ['task'=> $task->id]) }}">{{ $task->title }}</a>
    </div>

@empty
    No tasks

@endforelse


<div>

    <nav class="mt-4">
        @if($tasks->count())
            {{ $tasks->links() }}
        @endif
    </nav>

</div>




@endsection
