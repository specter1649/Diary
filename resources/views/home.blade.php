@extends('layout')

@section('content')

<div class="container">
    <div class="jumbotron">
        //Task should be put here.
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>To-do Lists: </h3>
        </div>
        <div class="panel-body">
            @if ($tasks->isEmpty())
                <p>There is no tasks.</p>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Finish</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->id}}</td>
                                <td><a href="{{ action('AppController@show', $task->id) }}">{{$task->title}}</a></td>
                                <td>{{$task->body}}</td>
                                <td>{{$task->done? 'Yes':'No'}}</td>
                                <td>
                                    <a href="{{ action('AppController@edit', $task->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ action('AppController@delete', $task->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>


@endsection
