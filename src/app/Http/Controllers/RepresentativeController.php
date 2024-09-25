<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\City;
use App\Models\Genre;
use App\Models\User;
use App\Models\Reservation;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\RepresentativeRequest;
use Illuminate\Http\Request;

class RepresentativeController extends Controller
{
    public function reservationConfirm()
    {
        $shop_id = Shop::where('creator_user_id', Auth::id())->first();

        $reservations = Reservation::where('date','>=',(new DateTime())->format('Y-m-d'))->
                        where('shop_id',$shop_id->id)
                        ->paginate(8);
        
        return view('reservation_confirm',compact('reservations'));
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
            'shop_overview'=>$request->shop_overview,
            'creator_user_id'=>Auth::id()
        ];

        $photograph = $request->file('shop_img')->storeAs('public/photograph', $request->file('shop_img')->getClientOriginalName());

        shop::create($form);

        return redirect('/representative/addStore');
    }
}
