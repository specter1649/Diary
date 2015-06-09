@extends('layout')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3>{{ $task->title }}</h3>
        </div>
        <div class="panel-body">
            <p>{{ $task->body }}</p>
            
            <p><strong>Done?</strong> {{ $task->done? 'Yes':'No' }}</p>
        </div>
        
    </div>
    
</div>

@endsection