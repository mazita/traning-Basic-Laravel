@extends('layouts.app')

@section('content')

 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users Profile') }}</div>

                <div class="card-body">
        
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="{{ $user->name }}" name="name" class="form-control" 
                            placeholder="Please enter name">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" value="{{ $user->email }}" name="email" class="form-control" 
                            placeholder="Please enter email">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" value="{{ $user->password }}" name="password" class="form-control" 
                            placeholder="Please enter password">
                        </div>

                        <!-- <div class="form-group">
                            <label>Password</label>
                            <input type="password" value="{{ $user->password }}" name="password" class="form-control" 
                            placeholder="Please enter password">
                        </div> -->


                        <!-- <div class="form-group">
                            <button type="submit" class="btn btn-primary">STORE USER PROFILE</button>
                        </div> -->

                        <td> <a class="btn-btn-primary" href="/users">Back</a></td>

     

                </div>
            </div>
        </div>
    </div>
</div>

@endsection




