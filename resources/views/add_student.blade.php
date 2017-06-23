@extends('layout.master')

@section('title', 'Home Page')

@section('content')


<form method="post" action="{{ route('studentSun') }}">
    <div class="form-group">
        <label for="name">Full Name</label>

        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full NAme">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
    {{ csrf_field() }}
    <button type="submit" class="btn btn-default">Add Student</button>
</form>

@endsection
