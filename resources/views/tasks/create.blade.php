@extends('layouts.app')


@section('content')
    <h1>New Task</h1>
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li> 
                @endforeach
            </ul>
        </div>
    @endif
        
    <form action="/tasks" method="POST">
        <div class="form-group">
            @csrf
            <label for="description">Task Description</label>
            <input class="form-control" name="description">
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
    </form>
@endsection
