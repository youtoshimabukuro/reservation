<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use App\Models\Shop;
use App\Models\City;
use App\Models\Genre;
use App\Models\Time;
use App\Models\Number;
use App\Models\Reservation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $shops = Shop::with('city')->get();
        $cities = City::all();
        $genres = Genre::all();
        $favorites = Favorite::where('user_id', Auth::id())->get();

        Session::put('shops', $shops);
        Session::put('favorites', $favorites);

        return view('index', compact('shops', 'cities', 'genres', 'favorites'));
    }

    public function search(Request $request)
    {
        $cities = City::all();
        $genres = Genre::all();
        $favorites = Favorite::where('user_id', Auth::id())->get();

        $shops = Shop::where('city_id', $request->city == 0 ? '>' : '=', $request->city)->
            where('genre_id', $request->genre == 0 ? '>' : '=', $request->genre)->
            where('shop_name', 'LIKE', "%{$request->search}%")
            ->get();

        Session::put('shops', $shops);

        return view('index', compact('cities', 'genres', 'shops', 'favorites'));
    }

    public function detail(Shop $shop_id)
    {
        $shop = $shop_id;
        $date = new DateTime();
        $times = Time::all();
        $numbers = Number::all();
        Session::put('shop', $shop);
        Session::put('date', $date);

        return view('shop_detail', compact('shop', 'times', 'numbers', 'date'));
    }

    public function favorite(Request $request)
    {
        $shops = Session::get('shops');
        $cities = City::all();
        $genres = Genre::all();

        $favorite = Favorite::where('user_id', Auth::id())->
            where('shop_id', $request->favorite)
            ->first();

        if ($favorite == null) {
            $form = [
                'user_id' => Auth::id(),
                'shop_id' => $request->favorite,
            ];
            Favorite::create($form);
        } else {
            Favorite::find($favorite->id)->delete();
        }

        $favorites = Favorite::where('user_id', Auth::id())->get();

        return view('index', compact('shops', 'cities', 'genres', 'favorites'));
    }

    public function myPage()
    {
        $reservations = Reservation::where('user_id', Auth::id())->paginate(1, ['*'], 'page1');

        $favorites = Favorite::where('user_id', Auth::id())->paginate(2);

        return view('mypage', compact('reservations', 'favorites'));
    }
}
