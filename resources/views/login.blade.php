@extends('layouts.layout')
@section('content')
<form class="login-form" action="/login" method="POST">
    @csrf
    <h3 class="text-center">Login</h3>
    <label for="email">Email Address</label>
    <input name="email" id="" class="" type="email" placeholder="Email" required>
    
    <label for="password">Password</label>
    <input name="password" id="" class="" type="password" placeholder="Password" required>

    <input name="submit-btn" id="" class="" type="submit" value="Login">
    <div class="text-center">Don't have an account <a href="/register">Register here</a></div>
</form>

@endsection