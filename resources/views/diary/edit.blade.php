@extends('app')

@section('title')
    Edit Post
@endsection

@section('content')

<div class="container">
    <div class="col-sm-8 col-sm-offset-2">
        {!! Form::open(['url'=>'/diary/update']) !!}
            {!! Form::hidden('id',$diary->id) !!}
            <div class="form-group">
                {!! Form::label('title','Title') !!}
                {!! Form::text('title', $diary->title, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', 'Body') !!}
                {!! Form::textarea('body', $diary->body, ['class'=>'form-control']) !!}
            </div>
        
            {!! Form::submit('Save Changes', ['class'=>'btn btn-info']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection