@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/add_store.css') }}">
@endsection

@section('main')

<div class="add-store">
    <div class="add-store_inner">
        <h2 class="add-store-ttl">店舗情報</h2>
        <table class="add-store-list">
            <form action="/representative/{{isset($shop) ? 'update':'create'}}" id="form" enctype="multipart/form-data" method="post">
            @csrf
                <tr class="add-store-item">
                    <th>店舗名</th>
                    <td>
                        <input type="text" name="shop_name" value="@if (@isset($shop)){{$shop->shop_name}}@endif" 
                    placeholder="例）株式会社estra">
                    </td>
                </tr>
                <tr class="add-store-item">
                    <th>店舗写真</th>
                    <td><input class="file" name="shop_img" type="file"></td>
                </tr>
                <tr class="add-store-item">
                    <th>都道府県</th>
                    <td>
                        <select name="city">
                            <option value="0">選択して下さい</option>
                            @foreach ($cities as $city)
                                <option value="{{$city->id}}" @if(@isset($shop)&&$shop->city_id == $city->id) selected @endif>{{$city->city_name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr class="add-store-item">
                    <th>飲食店種類</th>
                    <td>
                        <select name="genre">
                            <option value="0">選択して下さい</option>
                            @foreach ($genres as $genre)
                                <option value="{{$genre->id}}" @if(@isset($shop)&&$shop->genre_id == $genre->id) selected @endif>{{$genre->genre_name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr class="add-store-item">
                    <th>店舗概要</th>
                    <td>
                        <textarea name="shop_overview" class="Textarea" id="textarea" maxlength="250">@if (@isset($shop)){{$shop->shop_overview}}@endif
                        </textarea>
                    </td>
                </tr>
            </form>
        </table>
        <div class="item-submit">
            <div><input class="submit" form="form" type="submit" value="{{isset($shop) ? '変更する':'作成'}}"></div>
        </div>
    </div>
</div>

@endsection