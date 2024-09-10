@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('main')

<div class="thanks">
    <div class="thanks_inner">
        <div class="thanks-box">
            <h1>会員登録ありがとうございます</h1>
            <form class="thanks_form" action="/login">
                <button>ログインする</button>
            </form>
        </div>
    </div>
</div>

@endsection