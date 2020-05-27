<?php

namespace App\Http\Controllers;

use App\User;
use App\ParkBooking;
use Illuminate\Http\Request;

class ParkBookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $park_bookings =  User::with('parkBooking')->latest()->get()->toArray();
        $sn = 1;
        
        return view('admin.park-bookings.index')->with('park_bookings', 'sn');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.park-bookings.create')->with('park_bookings', ParkBooking::all());
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(CreateParkBookingsRequest $request)
    // {
    //      ParkBooking::create([
    //             'park_name' => $request->park_name,
    //             'guest_number' => $request->guest_number,
    //             'event_type' => $request->event_type
               

    //          ]);

    //         session()->flash('success', 'Park Bookings Created Successfully.');

    //         return redirect(route('admin.park-bookings.index'));
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(User $user)
    {
        $user_details = $user->load('parkBooking')->toArray();

         return view('admin.park-bookings.show')->with('user_details');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(ParkBooking $parkbooking)
    // {
    //      return view('admin.park-bookings.create')->with('park_booking', $parkbooking);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(UpdateParkBookingsRequest $request, ParkBooking $parkbooking)
    // {
    //      $parkbooking->update([
    //             'park_name' => $request->park_name,
    //             'guest_number' => $request->guest_number,
    //             'event_type' => $request->event_type
               
        
    //     ]);

    //      session()->flash('success', 'Bookings Updated Successfully.');

    //      return redirect(route('admin.park-bookings.index'));
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $message = $user->park_name . '\'s has been deleted';
        $user->delete();

        

        return redirect()->back()->with('success', $message);
    }
}

