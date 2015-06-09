@extends('app')

@section('title')
    Create
@endsection

@section('content')

<div class="container">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create
            </div>
            <div class="panel-body">
                {!! Form::open(['url'=>'/diary/create', 'class'=>'form']) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', 'Body') !!}
                        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
                    </div>
                
                    {!! Form::submit('Save',['class'=>'btn btn-info']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


@endsection