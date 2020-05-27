@extends('layouts.app')

@section('content')

@if(session()->has('success'))
                      <div class="alert alert-success">
                          {{ session()->get('success') }}
                      </div>
@endif

<div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">
                    Bookings
                    <div class="d-flex justify-content-end mb-2 pt-2">
                        <a href="{{ route('bookings.create') }}" class="btn btn-primary btn-sm waves-effect waves-light pull-right">
                        <i class="fa fa-plus"></i>
                    Add Bookings
                    </a>
                    </div>
                    
                </h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Bookings</a></li>
                </ol>
            </div>
        </div>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="card m-b-20">
                    <div class="card-body">
                            <table class="table table-bordered" id="datatable">

                                <thead>

                                     <th>
                                        Parks Gardens ID
                                    </th>
                                    
                                    <th>
                                        Services ID
                                    </th>

                                    <th>
                                        Amount Booked
                                    </th>

                                    <th>
                                        Booking Status
                                    </th>
                                   
                                    <th>
                                        Time Booked
                                    </th>
                                   
                                    <th>
                                        Duration Booked
                                    </th>
                                    <th width="250">
                                        Action
                                    </th>

                                </thead>
                            
                                <tbody>
                                    @foreach($bookings as $booking)
                                    <tr>
                                        <td>
                                             {{$booking->parks_gardens_id}}
                                        </td>

                                        <td>
                                             {{$booking->service_id}}
                                        </td>

                                         <td>
                                             {{$booking->amount_booked}}
                                        </td>

                                         <td>
                                             {{$booking->booking_status}}
                                        </td>

                                         <td>
                                             {{$booking->time_booked}}
                                        </td>

                                         <td>
                                             {{$booking->duration_booked}}
                                        </td>
                                         <td>
                                             {{$booking->service}}
                                        </td>

                                        <td>
                                             <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-info btn-sm">
                                                Edit
                                             </a>

                                              <button class="btn btn-danger btn-sm" onclick="handleDelete({{$booking->id}})">Delete</button>
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                    </div>
            </div>
        </div>      
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                    
                    <form action="" method="POST" id="deleteBookingsForm"> 

                        @method('DELETE')
                        @csrf
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Delete Bookings</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center text-bold"> 
                                    Are you sure you want to delete this Booking ?
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                                <button type="submit" class="btn btn-danger">Yes, Delete</button>
                            </div>
                            </div>
                    </form>
                        </div>
                        </div>
                            </div>
                        </div>


                                
                                
{{-- Services End --}}
                      

@endsection

@section('scripts')

    <script>
    
        function handleDelete(id) {

            var form = document.getElementById('deleteBookingsForm')

            form.action = '/bookings/' + id

             console.log('deleting.', form)

            $('#deleteModal').modal('show')
        }
    
    </script>

@endsection