@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}">
@endsection

@section('main')

<div class="shop-detail">
    <div class="shop-detail_inner">
        <div class="shop-description">
            <div class="shop-description-top">
                <form action="/" method="get">
                    @csrf
                    <button>&lt;</button>
                </form>
                <h2>{{$shop['shop_name']}}</h2>
            </div>
            @php
$i = 0;
if (str_contains($shop->shop_img, 'storage/photograph')) {
    $i = 1;
}
            @endphp
            <div class="shop-description-img">
                @if ($i == 0)
                    <img src="{{$shop['shop_img']}}">
                @else
                    <img src="{{asset($shop->shop_img)}}">
                @endif
            </div>
            <div class="shop-description-tag">
                <p class="shop-city">#{{$shop->city->city_name}}</p>
                <p class="shop-genre">#{{$shop->genre->genre_name}}</p>
            </div>
            <div class="shop-description-text">
                <p>{{$shop->shop_overview}}</p>
            </div>
        </div>
        <div class="reservation">
            <div class="reservation_inner">
                <div class="reservation-ttl">
                    <h3>予約</h3>
                </div>
                <div class="reservation-form">
                    <form action="/reserve/reserve" id="reservation" method="post">
                        @csrf
                        <input type="hidden" name="shop_name" value="{{$shop->id}}" readonly>
                        <input type="date" name="date" min="{{$date->format('Y-m-d')}}"
                            value="{{request('date')}}" onchange="displayDate()">
                        <select name="time" onchange="displayTime()">
                            <option value="">予約時間</option>
                            @foreach ($times as $time)
                                <option value="{{$time->id}}" @if(request('time') == $time->id) selected @endif>
                                    {{$time->reservation_time}}
                                </option>
                            @endforeach
                        </select>
                        <select name="number" onchange="displayNumber()">
                            <option value="">予約人数</option>
                            @foreach ($numbers as $number)
                                <option value="{{$number->id}}" @if(request('number') == $number->id) selected @endif>
                                    {{$number->number}}人
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="reservation-confirm">
                    @csrf
                    <table class="reservation-table">
                        <tr>
                            <th>Shop</th>
                            <td>{{$shop->shop_name}}</td>
                            <input type="hidden" name="shop_name" value="{{$shop->id}}" readonly>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td id="date_confirm">
                                @error('date')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Time</th>
                            <td id="time_confirm">
                                @error('time')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Number</th>
                            <td id="number_confirm">
                                @error('number')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="reservation-btn">
                <input type="submit" form="reservation" value="予約する">
            </div>
        </div>
    </div>
</div>

@endsection