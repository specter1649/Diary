@extends('layout')

@section('content')

<div class="container">
    <div class="panel panel-warning">
        <div class="panel-heading">
            <h3>Delete Task</h3>
        </div>
        <div class="panel-body">
            <p>Are you sure you want to delete task?</p>
            
            {!! Form::open(['url'=>'/delete', 'class'=>'form']) !!}
            {!! Form::hidden('id', $task->id) !!}
            
            <a href="{{ action('AppController@home') }}" class="btn btn-default">No</a>
            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection