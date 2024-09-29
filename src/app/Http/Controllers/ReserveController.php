<?php

namespace App\Http\Controllers;
use App\Models\Time;
use App\Models\Number;
use App\Models\Reservation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;

class ReserveController extends Controller
{

    public function reserve(ReservationRequest $request)
    {
            $form = [
                'user_id' => Auth::id(),
                'shop_id' => $request->shop_name,
                'date' => $request->date,
                'time_id' => $request->time,
                'number_id' => $request->number
            ];

            Reservation::create($form);

            return view('/done');
    }
}
