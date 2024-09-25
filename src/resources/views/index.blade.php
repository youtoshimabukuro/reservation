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
    <form action="/search" method="post">
        @csrf
        <select name="city" onchange="this.form.submit()">
            <option value="0">All city</option>
            @foreach($cities as $city)
                <option value="{{$city->id}}" @if(request('city') == $city->id) selected @endif>
                    {{$city->city_name}}
                </option>
            @endforeach
        </select>
        <select name="genre" onchange="this.form.submit()">
            <option value="0">All genre</option>
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
        @isset($shops)
            @foreach ($shops as $shop)
                <div class="shop-all_item">
                    <div class="shop-img-box">
                        @if (!str_contains($shop->shop_img, 'storage/photograph'))
                            <img src="{{$shop->shop_img}}" alt="" class="shop-img">
                        @else
                            <img src="{{asset($shop->shop_img)}}" alt="" class="shop-img">
                        @endif
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
        @endisset
    </div>
</div>

@endsection