<?php

namespace App\Http\Controllers;
use App\Models\Time;
use App\Models\Number;
use App\Models\Reservation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function Confirm(Request $request)
    {
        $confirm = [
            'date' => $request->date_select,
            'time' => $request->time_select,
            'number' => $request->number_select
        ];
        $shop = Session::get('shop');
        $date = new DateTime();
        $times = Time::all();
        $numbers = Number::all();
        $timeId = Time::find($request->time_select);
        $numberId = Number::find($request->number_select);

        return view('shop_detail', compact('confirm', 'shop', 'date', 'times', 'numbers', 'timeId', 'numberId'));
    }

    public function reserve(Request $request)
    {
        $form = [
            'user_id' => Auth::id(),
            'shop_id' => $request->shop_name,
            'date' => $request->date,
            'time_id' => $request->time,
            'number_id' => $request->number
        ];

        Reservation::create($form);
        return redirect('/');
    }
}
