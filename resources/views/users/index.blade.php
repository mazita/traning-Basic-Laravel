<!-- <H1>This is index users : {{$users->count()}} numbers on user</H1>

@foreach ($users as $usertest)
<h4>
{{$usertest->name}} - {{$usertest->email}} <br>
</h4>
@endforeach -->



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users Index') }}</div>

                <div class="card-body">
                    <table class=table>
                        <thead>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>CREATED AT</th>
                            <th>ACTION</th>
                            <!-- <td>COUNT TIME</td> -->
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td> {{$user->id}}</td>
                            <td> {{$user->name}}</td>
                            <td> {{$user->email}}</td>
                            <!-- <td> {{$user->created_at}}</td> -->
                            <td> {{$user->created_at->diffForHumans() }}</td>
                            <td> <a class="btn btn-primary" href="/users/{{$user->id}}">Show</a></td>
                            <td> <a class="btn btn-success" href="/users/{{$user->id}}/edit">Edit</a></td>
                            <td> <a onclick="return confirm('Are You Sure')" class="btn btn-danger" href="/users/{{$user->id}}/delete">Delete</a></td>
                  
                        </tr>
                            @endforeach 
                        </tbody>

                    </table>
                    {{$users->links()}}
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
