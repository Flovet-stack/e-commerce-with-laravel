@extends('layouts.layout')
@section('content')
<form class="login-form" action="/register" method="POST">
    @csrf
    <h3 class="text-center">Register</h3>
    <label for="name">Names</label>
    <input name="name" id="" class="" type="text" placeholder="Names here" required>
    
    <label for="email">Email Address</label>
    <input name="email" id="" class="" type="email" placeholder="Email" required>
    
    <label for="password">Password</label>
    <input name="password" id="" class="" type="password" placeholder="Password" required>

    <input name="submit-btn" id="" class="" type="submit" value="Register">
    <div class="text-center">Already have an account <a href="/login">Login Here</a></div>
</form>

@endsection