@extends('layout')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Create Task</h3>
        </div>
        <div class="panel-body">
            {!! Form::open(['url'=> '/create', 'class'=>'form']) !!}
            
            <div class="form-group">
                {!! Form::label('title', 'Title: ') !!}
                {!! Form::text('title',null, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('body', 'Body:') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
            </div>
            
            {!! Form::submit('Create Task', ['class'=>'btn btn-info']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>
</div>
    

@endsection()