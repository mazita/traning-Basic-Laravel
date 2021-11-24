@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

    
            @if(session()->has('type'))
            <div class="alert {{ session()->get('type') }}">
            {{ session()->get('message')}}
            </div>


            @endif

            <div class="card">
                <div class="card-header">{{ __('Todos Index') }}</div>

                <div class="card-body">
                    <table class=table>
                        <thead>
                            <th>ID</th>
                            <th>CREATOR</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>ATTACHMENT</th>
                            <th>ACTION</th>
                        </thead>
                        <tbody>
                        @foreach ($todos as $todotest)
                        <tr>
                            <td> {{$todotest->id}}</td>
                            <td> {{$todotest->user->name}}</td>
                            <td> {{$todotest->title}}</td>
                            <td> {{$todotest->description}}</td>
                            <td> {{$todotest->attachment}}</td>

                                      
                            <td> <a class="btn btn-primary" href="/todos/{{$todotest->id}}">Show</a></td>
                            <td> <a class="btn btn-success" href="/todos/{{$todotest->id}}/edit">Edit</a></td>
                            <td> <a onclick="return confirm('Are You Sure')" class="btn btn-danger" href="/todos/{{$todotest->id}}/delete">Delete</a></td>
                        </tr>
                            @endforeach 
                        </tbody>

                    </table>
                  {{$todos->links()}}
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
