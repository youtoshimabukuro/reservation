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
use DateTime;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function favorite(Request $request)
    {
        $favorite = Favorite::where('user_id', Auth::id())->
            where('shop_id', $request->favorite)
            ->first();

        dd($favorite);

        Favorite::find($favorite->id)->delete();

        return redirect('/mypage');
    }
}
