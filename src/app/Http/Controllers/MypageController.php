<?php

namespace App\Http\Controllers;
use App\Models\Favorite;
use App\Models\City;
use App\Models\Genre;
use App\Models\Time;
use App\Models\Number;
use App\Models\Reservation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function favorite(Request $request)
    {
        $favorite = Favorite::where('user_id', Auth::id())->
            where('shop_id', $request->favorite)
            ->first();

        Favorite::find($favorite->id)->delete();

        return redirect('/mypage');
    }

    public function close(Request $request)
    {
        if ($request->id!=null) {
            $delete_id = Reservation::where('user_id', Auth::id())->
            where('id', $request->id)->first();
        Reservation::find($delete_id->id)->delete();
        }

        $reservations = Reservation::where('user_id', Auth::id())->paginate(1, ['*'], 'page1');
        $times = Time::all();
        $numbers = Number::all();

        $favorites = Favorite::where('user_id', Auth::id())->paginate(2);

        return view('mypage', compact('reservations', 'favorites', 'times','numbers'));
    }

    public function update(Request $request)
    {
        $form = [
            'date' => $request->date,
            'time_id' => $request->time,
            'number_id' => $request->number
        ];

        Reservation::find($request->id)->update($form);

        return redirect('/mypage');
    }
}
