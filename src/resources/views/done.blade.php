@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('main')

<div class="done">
    <div class="done_inner">
        <div class="thanks-box">
            <h1>ご予約ありがとうございます</h1>
            <form class="done_form" action="/">
                <button>戻る</button>
            </form>
        </div>
    </div>
</div>

@endsection