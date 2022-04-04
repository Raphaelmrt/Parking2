<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Place;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.admin_historiqueReservation', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.user_res');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservations=Reservation::select('place_id')->where('StatutReservation', 1);
        $Places=Place::all();
        if($reservations->count()<$Places->count())
        {
            $Places=Place::whereNotIn('id', $reservations);
            $data= new Reservation;
            $data->DateDébut=Carbon::now();
            $data->user_id=Auth::user()->id;
            $data->place_id=$Places->first()->id;
            $data->Durée=6;
            $data->StatutReservation=1;
            $data->save();
        }
        else
        {
            $user=User::findOrFail(Auth::user()->id);
            $user->rangFile=User::where('rangFile','<>',0)->get()->count()+1;
            $user->save();
            
        }

        return redirect('dashboard')->with('success', 'Votre réservation à bien été faite !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $reservations = Reservation::where('user_id',Auth::user()->id)->get();

        return view('user.user_historique', compact('reservations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('admin.admin_editReservation', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'DateDébut' => 'required',
            'Durée' => 'required',
        ]);

        Reservation::whereId($id)->update($validatedData);

        return redirect('admin.admin_historiqueReservation')->with('success', 'Votre réservation à bien été modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->StatutReservation=0;
        $reservation->update();

        return back();
    }
}
