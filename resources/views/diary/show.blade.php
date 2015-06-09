@extends('app')

@section('content')

<div class="container">
    <div class="page-header">
        <h2>
            {{ $diary->title }} 
            <small class="pull-right">
                {{ date('F d, Y', strtotime($diary->created_at)) }}
                <small>
                    {{ date('g:i A',strtotime($diary->created_at))}}
                </small>
            </small>
        </h2>
    </div>
    
    <blockquote>
        <p style="white-space: pre">
            {{ $diary->body }}
        </p>
    </blockquote>
    
    <div class="row">
        <a href="{{ action('DiaryController@show', $previous) }}" 
           @if($previous==null)
                disabled
           @endif           
           class="btn btn-default">Previous</a>
        <a href="{{ action('DiaryController@show', $next) }}" 
           @if($next==null)
                disabled
           @endif 
           class="btn btn-default pull-right">Next</a>
    </div>
</div>

@endsection