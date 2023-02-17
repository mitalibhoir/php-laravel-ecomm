@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <form action='register' , method='POST'>
                @csrf
                <div class="mb-3 form-group">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="mb-3 form-group">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="mb-3 form-group">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                        placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection