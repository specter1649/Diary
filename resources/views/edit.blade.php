@extends('layout')

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Edit Task: </h3>
        </div>
        <div class="panel-body">
            {!! Form::open(['url'=>'/edit','class'=>'form']) !!}
            {!! Form::hidden('id', $task->id) !!}
            
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title',$task->title,['class'=>'form-control']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('body', 'Body') !!}
                    {!! Form::textarea('body', $task->body , ['class'=>'form-control']) !!}
                </div>
            
                <div class="checkbox">
                    <label>
                        {!! Form::checkbox('done', 1, $task->done) !!} Done
                    </label>
                </div>
            
            {!! Form::submit('Save Changes', ['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection