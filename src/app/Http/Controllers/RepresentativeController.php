<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\City;
use App\Models\Genre;
use Illuminate\Http\Request;

class RepresentativeController extends Controller
{
    public function reservationConfirm()
    {
        return view('reservation_confirm');
    }

    public function addStore()
    {
        $cities = City::all();
        $genres = Genre::all();

        return view('add_store',compact('cities','genres'));
    }

    public function create(Request $request)
    {
        $form = [
            'shop_img'=>"storage/photograph/".$request->file('shop_img')->getClientOriginalName(),
            'shop_name'=>$request->shop_name,
            'city_id'=>$request->city,
            'genre_id'=>$request->genre,
            'shop_overview'=>$request->shop_overview
        ];

        $photograph = $request->shop_img;

        $photograph->store('public/photograph');

        dd($form);
    }
}
