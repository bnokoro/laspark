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
        $park_bookings =  ParkBooking::with('user')->latest()->get()->toArray();
        $sn = 1;
        
        // return view('admin.park-bookings.index')->with(['park_bookings' => $park_bookings, 'sn' => $sn]);

         return view('admin.park-bookings.index', compact('park_bookings','sn' ));
    }

   

    public function show(ParkBooking $park_booking)
    {
        $park_booking_details = $park_booking->load('user');

        
         return view('admin.park-bookings.show', compact('park_booking_details'));
    }

    
     
    public function destroy(ParkBooking $park_booking)
    {
        $message = $park_booking->park_name . '\'s has been deleted';
        $park_booking->delete();

        

        return redirect()->back()->with('success', $message);
    }
}

