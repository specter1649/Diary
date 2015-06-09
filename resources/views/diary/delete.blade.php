@extends('app')

@section('title')
    Delete
@endsection

@section('content')

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Delete</h3>
        </div>
        <div class="panel-body">
            Are you sure you want to delete?
            {!! Form::open(['url'=>'/diary/destroy']) !!}
                {!! Form::hidden('id',$diary->id) !!}
                <a href="{{ action('DiaryController@index') }}" class="btn btn-default">No</a>
                {!! Form::submit('Yes', ['class'=>'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection