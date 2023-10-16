@extends('layouts.app')

@section('content')
    <h1>Task List</h1>

    @foreach ($tasks as $task)
        <div class="card @if($task->isCompleted()) border-success @endif" style="margin-bottom: 20px;">
            <div class="card-body">
                <p>
                  {{ $task -> description }}
                </p>

                @if(!$task->isCompleted())
                    <form action="/tasks/{{ $task->id }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="d-grid gap-2">
                            <button class="btn btn-light" input="submit">Complete</button>
                        </div> 
                    </form> 
                @else
                    <form action="/tasks/{{ $task->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <div class="d-grid gap-2">
                            <button class="btn btn-danger" input="submit">Delete</button>
                        </div> 
                    </form> 
                @endif                
                
            </div>
        </div>
    @endforeach
    
        <a href="tasks/create">
            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg">New Task</button>
            </div>
        </a>
@endsection
