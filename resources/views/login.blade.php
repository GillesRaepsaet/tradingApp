@extends('layout.master')


@section('title', 'login')


@section('content')
    <h1>Login</h1>
    <form action="/login" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="control-form" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@endsection
