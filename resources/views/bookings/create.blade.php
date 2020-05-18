@extends('layouts.app')

@section('content')


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">
                                            Welcome to Laspark Dashboard
                                        </li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

{{--Create Parks and Gardens Start --}}

                        <div class="card card-default">
                            <div class="card-header">
                                {{isset($booking) ? 'Edit Bookings' : 'Create Bookings' }}
                            </div>
                            <div class="card-body">

                                @if($errors->any())
                                <div class="alert allert-danger">
                                    <ul class="list-group">
                                        @foreach($errors->all() as $error)
                                        <li class="list-group-item text-danger">
                                            {{$error}}
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                                @endif


                            <form action="{{ isset($booking) ? route('bookings.update', $booking->id) :  route('bookings.store') }}" method="POST">

                                    @csrf

                                    @if(isset($booking))

                                    @method('PUT')

                                    @endif

                                    <div class="form-group">

                                        <label for="name">Parks Gardens ID</label>
                                        <input type="text" id="parks_gardens_id" class="form-control" name="parks_gardens_id" value="{{ isset ($booking) ? $booking->parks_gardens_id : '' }}">


                                        <label for="name">Service ID</label>
                                        <input type="text" id="service_id" class="form-control" name="service_id" value="{{ isset ($booking) ? $booking->service_id : '' }}">


                                        <label for="name">Amount Booked</label>
                                        <input type="text" id="amount_booked" class="form-control" name="amount_booked" value="{{ isset ($booking) ? $booking->amount_booked : '' }}">


                                        <label for="name">Booking Status</label>
                                        <select class="form-control" id="booking_status" name="booking_status" value="{{ isset ($booking) ? $booking->booking_status : '' }}">
                                            <option>0</option>
                                            <option>1</option>
                                        </select>


                                        <label for="name">Time Booked</label>
                                        <input type="datetime-local" id="time_booked" class="form-control" name="time_booked" value="{{ isset ($booking) ? $booking->time_booked : '' }}">

                                        <label for="name">Duration Booked</label>
                                        <input type="datetime-local" id="duration_booked" class="form-control" name="duration_booked" value="{{ isset ($booking) ? $booking->duration_booked : '' }}">


                                    </div>
                                        <div class="form-group">
                                            <button class="btn btn-success">
                                                {{ isset ($booking) ? 'Update Bookings' : 'Add Bookings' }}
                                            </button>
                                        </div>
                            </form>
                            </div>
                        </div>


{{--Create Bookings End --}}

@endsection
