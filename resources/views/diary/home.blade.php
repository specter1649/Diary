@extends('app')

@section('title')
    Home
@endsection

@section('content')

<div class="container">
    <div class="col-sm-10 col-sm-offset-1">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                
                @if($diaries->isEmpty())
                    <tr>
                        <td>No Records.</td>
                        <td></td>
                    </tr>
                @else
                    @foreach($diaries as $diary)
                        <tr>
                            <td><a href="{{ action('DiaryController@show', $diary->id) }}">{{ $diary->title }}</a></td>
                            <td>{{ $diary->created_at }}</td>
                            <td>
                                <a href="{{ action('DiaryController@edit', $diary->id) }}" class="btn btn-xs btn-info">Edit</a>
                                <a href="{{ action('DiaryController@delete', $diary->id) }}" class="btn btn-danger btn-xs">Delete</a>
                            </td>
                            
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>


@endsection