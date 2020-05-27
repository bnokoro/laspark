<?php

namespace App\Http\Controllers;


use App\Booking;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Requests\Bookings\CreateBookingsRequest;
use App\Http\Requests\Bookings\UpdateBookingsRequest;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.bookings.index')->with('bookings', Booking::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bookings.create')->with('services', Service::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBookingsRequest $request)
    {
         Booking::create([
                'parks_gardens_id' => $request->parks_gardens_id,
                'service_id' => $request->service,
                'amount_booked' => $request->amount_booked,
                'booking_status' => $request->booking_status,
               'time_booked'=>$request->time_booked,
               'duration_booked' =>$request->duration_booked,
               'service' =>$request->service

             ]);

            session()->flash('success', 'Bookings Created Successfully.');

            return redirect(route('admin.bookings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
         return view('admin.bookings.create')->with('booking', $booking);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingsRequest $request, Booking $booking)
    {
         $booking->update([
               'parks_gardens_id' => $request->parks_gardens_id,
                'service_id' => $request->service_id,
                'amount_booked' => $request->amount_booked,
                'booking_status' => $request->booking_status,
                'time_booked'=>$request->time_booked,
                'duration_booked' =>$request->duration_booked,
                'service' =>$request->service,
        
        ]);

         session()->flash('success', 'Bookings Updated Successfully.');

         return redirect(route('admin.bookings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        session()->flash('success', 'Bookings Deleted Successfully.');

        return redirect(route('admin.bookings.index'));
    }
}
