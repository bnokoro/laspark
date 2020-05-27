@extends('layouts.app')

@section('content')

{{--Create Bookings Start --}}
                       
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
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="page-title-box"><h4 class="page-title">{{isset($booking) ? 'Edit' : 'Create' }} Bookings</h4>
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="/admin/bookings">Bookings</a></li>
                                                <li class="breadcrumb-item active"><a href="#">{{isset($booking) ? 'Edit' : 'Create ' }} Bookings</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

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
                                            
                                            <option>Select</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>


                                        <label for="name">Time Booked</label>
                                        <input type="date" id="time_booked" class="form-control" name="time_booked"value="{{ isset ($booking) ? $booking->time_booked : '' }}">
                                      
                                        <label for="name">Duration Booked</label>
                                        <input type="date" id="duration_booked" class="form-control" name="duration_booked" value="{{ isset ($booking) ? $booking->duration_booked : '' }}">
                                      

                                        <label for="name">Booking Services</label>
                                        <select class="form-control" id="service" name="service" value="{{ isset ($booking) ? $booking->service : '' }}">
                                         @foreach ($services as $service)

                                        
                                            <option>
                                            
                                                {{$service->service}}

                                            </option>
                                        
                                            @endforeach
                                        </select>
                                        
                                         </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary">
                                                {{ isset ($booking) ? 'Update Bookings' : 'Add Bookings' }}
                                            </button>
                                        </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                
{{--Create Bookings End --}}
                     
@endsection
{{-- 
@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
flatpickr('#time_booked')
</script>

@endsection

@section('css')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

@endsection --}}