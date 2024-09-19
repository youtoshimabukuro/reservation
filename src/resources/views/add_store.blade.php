@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/add_store.css') }}">
@endsection

@section('main')

<div class="add-store">
    <div class="add-store_inner">
        <h2 class="add-store-ttl">店舗情報</h2>
        <table class="add-store-list">
            <form action="/representative/create" id="create" enctype="multipart/form-data" method="post">
            @csrf
                <tr class="add-store-item">
                    <th>店舗名</th>
                    <td><input type="text" name="shop_name" placeholder="例）株式会社estra"></td>
                </tr>
                <tr class="add-store-item">
                    <th>店舗写真</th>
                    <td><input class="file" name="shop_img" type="file"></td>
                </tr>
                <tr class="add-store-item">
                    <th>都道府県</th>
                    <td>
                        <select name="city">
                            @foreach ($cities as $city)
                                <option value="{{$city->id}}">{{$city->city_name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr class="add-store-item">
                    <th>飲食店種類</th>
                    <td>
                        <select name="genre">
                            @foreach ($genres as $genre)
                                <option value="{{$genre->id}}">{{$genre->genre_name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr class="add-store-item">
                    <th>店舗概要</th>
                    <td>
                        <textarea name="shop_overview" class="Textarea" id="textarea" maxlength="250"></textarea>
                    </td>
                </tr>
            </form>
        </table>
        <div class="item-submit">
            <div><input class="submit" form="create" type="submit"></div>
        </div>
    </div>
</div>

@endsection