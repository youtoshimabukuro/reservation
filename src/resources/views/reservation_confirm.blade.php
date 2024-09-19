@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/reservation_confirm.css') }}">
@endsection

@section('main')

<div class="confirm_inner">
    <h1>
        <form action="/date">
            <!-- @csrf -->
            <button  type="submit" class="date_ttl-btn" name="day" value="">&lt;</button>
            <input type="text" class="date" name="date" value="{{$date}}" readonly>
            <button type="submit" class="date_ttl-btn" name="day" value="">&gt;</button>
        </form>
    </h1>
    <div class="table_box">
        <table class="confirm_table">
            <tr class="confirm_table-item">
                <th>名前</th>
                <th>店舗名</th>
                <th>日付</th>
                <th>時間</th>
                <th>人数</th>
            </tr>
            <!-- @foreach ($times as $time) -->
                <tr>
                    <td>{{}}</td>
                    <td>{{}}</td>
                    <td>{{}}</td>
                    <td>{{}}</td>
                    <td>{{}}</td>
                </tr>
            <!-- @endforeach -->
        </table>
    </div>
    <div class="links">{{}}</div>
</div>

@endsection