@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/reservation_confirm.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
@endsection

@section('main')

<div class="confirm_inner">
    <h1>
        <form action="/date">
            <!-- @csrf -->
            <button  type="submit" class="date_ttl-btn" name="day" value="">&lt;</button>
            <input type="text" class="date" name="date" value="{{(new DateTime)->format('Y-m-d')}}" readonly>
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
            @if (@isset($reservations))
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{$reservation->user->name}}</td>
                        <td>{{$reservation->shop->shop_name}}</td>
                        <td>{{$reservation->date}}</td>
                        <td>{{$reservation->time->reservation_time}}</td>
                        <td>{{$reservation->number->number}}</td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
    <div class="links">{{$reservations->links()}}</div>
</div>

@endsection