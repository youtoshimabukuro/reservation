@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('symbol')
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

@endsection

@section('search')
<div class="search">
    <form action="/reservation/search" method="post">
        @csrf
        <select name="city" onchange="this.form.submit()">
            @foreach($cities as $city)
                <option value="{{$city->id}}" @if(request('city') == $city->id) selected @endif>
                    {{$city->city_name}}
                </option>
            @endforeach
        </select>
        <select name="genre" onchange="this.form.submit()">
            @foreach ($genres as $genre)
                <option value="{{$genre->id}}" @if(request('genre') == $genre->id) selected @endif>
                    {{$genre->genre_name}}
                </option>
            @endforeach
        </select>
        <label class="search-before" for="search"></label>
        <input type="search" name="search" placeholder="Search..." value="{{request('search')}}">
    </form>
</div>
@endsection

@section('main')

<div class="shop-all">
    <div class="shop-all_inner">
        @foreach ($shops as $shop)
            <div class="shop-all_item">
                <div class="shop-img-box">
                    <img src="{{$shop->shop_img}}" alt="" class="shop-img">
                </div>
                <h4 class="shop-name">{{$shop->shop_name}}</h4>
                <div class="shop-tag-box">
                    <p class="shop-city">#{{$shop->City->city_name}}</p>
                    <p class="shop-genre">#{{$shop->genre->genre_name}}</p>
                </div>
                <div class="shop-bottom-box">
                    <div class="shop-btn">
                        <form action="/detail/{{$shop->id}}" method="post">
                            @csrf
                            <button>詳しく見る</button>
                        </form>
                    </div>
                    <form action="/favorite" id="form" class="favorite-form" method="post" target="sendFavorite">
                        @csrf
                        @if (@count($favorites) > 0)
                            <?php        $i = 0; ?>
                            @foreach ($favorites as $favorite)
                                @if ($shop->id == $favorite->shop_id)
                                    <input type="checkbox" id="{{$shop->id}}" checked onchange="this.form.submit()" class="btn-send">
                                    <?php                $i++; ?>
                                    @break
                                @endif
                            @endforeach
                            @if ($i == 0)
                                <input type="checkbox" id="{{$shop->id}}" onchange="this.form.submit()" class="btn-send">
                            @endif
                        @else
                            <input type="checkbox" id="{{$shop->id}}" onchange="this.form.submit()" class="btn-send">
                        @endif
                        <input type="text" name="favorite" value="{{$shop->id}}">
                        <label for="{{$shop->id}}" class="heart"></label>
                    </form>
                    <iframe name="sendFavorite"></iframe>
                </div>
            </div>
        @endforeach
        <div class="shop-all_item">
            <div class="shop-img-box">
                <img src="{{asset('storage/photograph/about.jpg')}}" alt="" class="shop-img">
            </div>
            <h4 class="shop-name">仙人</h4>
            <div class="shop-tag-box">
                <p class="shop-city">#東京</p>
                <p class="shop-genre">#寿司</p>
            </div>
            <div class="shop-bottom-box">
                <div class="shop-btn">
                    <form action="">
                        <button>詳しく見る</button>
                    </form>
                </div>
                <form action="" class="favorite-form">
                    <input type="checkbox" id="test" name="favorite" value="1" onchange="">
                    <label for="test" class="heart"></label>
                </form>
                <iframe name="sendPhoto"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection