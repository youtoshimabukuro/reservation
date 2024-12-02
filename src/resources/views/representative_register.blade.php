@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('main')
<div class="register">
    <div class="register_inner">
        <h1>店舗代表者登録フォーム</h1>
        <form class="register_form" action="/admin/register" method="post">
            @csrf
            <div class="register_form-item">
                <span class="user-name"></span>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Username">
            </div>
            <div class="form_error">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="register_form-item">
                <span class="email"></span>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
            </div>
            <div class="form_error">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div class="register_form-item">
                <span class="lock"></span>
                <input type="password" name="password" placeholder="password">
            </div>
            <div class="form_error">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
            <div class="register_form-btn">
                <input class="" type="submit" value="登録">
            </div>
        </form>
    </div>
</div>
@endsection