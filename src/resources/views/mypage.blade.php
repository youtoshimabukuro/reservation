@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
@endsection

@section('main')

<div class="mypage">
    <div class="mypage_inner">
        <div class="reservation-status">
            <div class="reservation-status-ttl">
                <h3>予約状況</h3>
            </div>
            <?php $r = 0 ?>
            @foreach ($reservations as $index => $reservation)
                <?php    $r++; ?>
                <div class="reservation-description">
                    <div class="reservation-description-top">
                        <div class="reservation-description-ttl">
                            <span class="clock">
                            </span>
                            <h4>予約{{$index + 1}}</h4>
                        </div>
                        <div class="reservation-description-close">
                            <a class="close_btn" href="/mypage?page1=
                                @if (count($reservations) != $index)
                                    {{$index + 2}}
                                @else
                                    {{1}}
                                @endif
                                "></a>
                            {{count($reservations)}}
                            {{$index + 1}}
                            <!-- <form action="/mypage/close" method="post">
                                @csrf
                                    <label class="close_btn" for="close"></label>
                                    <input type="submit" id="close" name="id" value="{{$reservation->id}}">
                                </form> -->
                        </div>
                    </div>
                    <label for="reservation-btn">
                        <div class="reservation-table_around">
                            <table class="reservation-table">
                                <tr>
                                    <th>Shop</th>
                                    <td>{{$reservation->shop->shop_name}}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td>{{$reservation->date}}</td>
                                </tr>
                                <tr>
                                    <th>Time</th>
                                    <td>{{$reservation->time->reservation_time}}</td>
                                </tr>
                                <tr>
                                    <th>Number</th>
                                    <td>{{$reservation->number->number}}人</td>
                                </tr>
                            </table>
                            <div class="mask">
                                <div class="caption">変更する</div>
                            </div>
                        </div>
                    </label>
                </div>
            @endforeach
            <input type="checkbox" class="reservation-btn-check" id="reservation-btn">
            <div class="link">
                <span>{{$reservations->links()}}</span>
            </div>
            <div class="update">
                <div class="update_inner">
                    <table class="reservation-update">
                        <form action="/mypage/update" id="update" method="post">
                        @csrf
                            <input type="hidden" name="id" value="{{$reservation->id}}" readonly>
                            <tr class="reservation-update-item">
                                <th>Shop</th>
                                <td>{{$reservation->shop->shop_name}}</td>
                            </tr>
                            <tr class="reservation-update-item">
                                <th>Date</th>
                                <td><input type="date" name="date" value="{{$reservation->date}}"></td>
                            </tr>
                            <tr class="reservation-update-item">
                                <th>Time</th>
                                <td>
                                    <select name="time">
                                        @foreach ($times as $time)
                                            <option value="{{$time->id}}" @if($reservation->time_id == $time->id) selected @endif>
                                                {{$time->reservation_time}}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr class="reservation-update-item">
                                <th>Number</th>
                                <td>
                                    <select name="number">
                                        @foreach ($numbers as $number)
                                            <option value="{{$number->id}}" @if($reservation->number_id == $number->id) selected
                                            @endif>
                                                {{$number->number}}人
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </form>
                    </table>
                    <div class="update-btn">
                        <div class="update-btn_inner">
                            <input type="submit" form="update" value="変更する">
                            <label for="reservation-btn">戻る</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="favorite">
            <div class="user">
                <h3>{{Auth::user()->name}}さん</h3>
            </div>
            <div class="reservation-ttl">
                <h3>お気に入り店舗</h3>
                <div class="favorite_link-top">
                    <span>{{$favorites->links()}}</span>
                </div>
            </div>
            <div class="favorite-shop">
                @foreach ($favorites as $favorite)
                    <div class="shop-all_item">
                        <div class="shop-img-box">
                            @if (!str_contains($favorite->shop->shop_img, 'storage/photograph'))
                                <img src="{{$favorite->shop->shop_img}}" alt="" class="shop-img">
                            @else
                                <img src="{{asset($favorite->shop->shop_img)}}" alt="" class="shop-img">
                            @endif
                        </div>
                        <h4 class="shop-name">{{$favorite->shop->shop_name}}</h4>
                        <div class="shop-tag-box">
                            <p class="shop-city">#{{$favorite->shop->city->city_name}}</p>
                            <p class="shop-genre">#{{$favorite->shop->genre->genre_name}}</p>
                        </div>
                        <div class="shop-bottom-box">
                            <div class="shop-btn">
                                <form action="/detail/{{$favorite->shop->id}}" method="post">
                                    @csrf
                                    <button>詳しく見る</button>
                                </form>
                            </div>
                            <form action="/mypage/favorite" class="favorite-form" method="post">
                                @csrf
                                <input type="checkbox" id="{{$favorite->shop->id}}" onchange="this.form.submit()" checked>
                                <input type="hidden" name="favorite" value="{{$favorite->shop->id}}">
                                <label for="{{$favorite->shop->id}}" class="heart"></label>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="favorite_link">
                <span>{{$favorites->links()}}</span>
            </div>
        </div>
    </div>
</div>

@endsection