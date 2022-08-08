@extends('layout.master')


@section('title', 'register')


@section('content')
    <h1>Register</h1>
    <form action="/register" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        </div>
        <div class="form-group">
            <label for="cp">confirmed password</label>
            <input type="password" class="form-control" id="cp" name="cp" placeholder="confirmed password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection
