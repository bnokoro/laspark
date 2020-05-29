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
                <h4 class="page-title">Park Bookings</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Park Bookings</a></li>
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
                                     <th width="10">
                                         S.No
                                     </th>

                                     <th>
                                        Park User
                                    </th>

                                    <th>
                                        Park Name
                                    </th>
                                    
                                    <th>
                                        Number of Guest
                                    </th>

                                    <th>
                                         Type of Event
                                    </th>

                                   
                                    <th width="250">
                                        Action
                                    </th>

                                </thead>
                            
                                <tbody>
                                    @foreach($park_bookings as $park_booking)
                                    <tr>
                                        <td>
                                            {{$sn++}}
                                        </td>
                                        <td>
                                             {{$park_booking['user'] ? $park_booking['user']['first_name']. '  ' . $park_booking['user']['last_name'] : ''}}
                                        </td>
                                        <td>
                                             {{$park_booking['park_name']}}
                                        </td>

                                        <td>
                                             {{$park_booking['guest_number']}}
                                        </td>

                                         <td>
                                              {{$park_booking['event_type']}}
                                        </td>

                                         <td>
                                             <a href="/admin/park-bookings/{{$park_booking['id']}}"
                                                 class="btn btn-primary btn-sm waves-effect waves-light">
                                                View
                                             </a> 

                                             <button
                                                class="btn btn-danger btn-sm waves-effect waves-light delete-button"
                                                data-toggle="modal"
                                                data-url="/admin/park-bookings/{{$park_booking['id']}}"
                                                data-target="#delete-park-bookings">
                                                Delete
                                             </button>
                                        </td>
                                       
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
            </div>
        </div>      
        
    @include('admin.park-bookings.partials._delete')    
</div>


                                
                                
@stop