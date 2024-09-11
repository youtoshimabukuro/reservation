
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('symbol')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('main')
<div class="login">
    <div class="login_inner">
        <h1>Login</h1>
        <form class="login_form" action="/login" method="post">
        @csrf
            <div class="login_form-item">
                <span class="email"></span>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
            </div>
            <div class="form_error">
            @error('email')
            {{ $message }}
            @enderror
            </div>
            <div class="login_form-item">
                <span class="lock"></span>
                <input type="password" name="password" placeholder="password">
            </div>
            <div class="form_error">
            @error('password')
            {{ $message }}
            @enderror
            </div>
            <div class="login_form-btn">
                <input class="" type="submit" value="ログイン">
            </div>
        </form>
    </div>
</div>
@endsection