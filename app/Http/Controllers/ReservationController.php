<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Rooms $room)
    {

        $user = Auth::user();
        $data = [

            'room' => $room,

            'user' => $user,

        ];



        return view('indexes.reservation', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([

            'room_id' => 'required',
            'user_id' => 'required',
            'checkin_date' => 'required',
            'reservation_start_date' => 'required',
            'reservation_end_date' =>'required',
            'reservation_type' =>'required',

            // Add more validation rules as needed

        ]);


        // Create a new reservation instance

        Reservations::create([
            'room_id'=> $request->room_id,
            'user_id'=> $request->user_id,
            'reservation_capacity'=>$request->reservation_capacity,
          'reservation_start_date' =>$request->reservation_start_date,
          'reservation_end_date' =>$request->reservation_end_date,


        ]);

        // $reservation->room_id = $validatedData['room_id'];

        // $reservation->user_id = $validatedData['user_id'];

        // $reservation->checkin_date = $validatedData['checkin_date'];

        // $reservation->checkout_date = $validatedData['checkout_date'];

        // Add more reservation data as needed


        // Save the reservation



        // Redirect to a success page or display a success message

        return redirect()->route('reservations.success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservations $reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservations $reservations)
    {
        //
    }
}
