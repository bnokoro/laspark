@extends('layouts.app')
@section('content')

    @if(session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box"><h4 class="page-title">Park Bookings</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/admin/park-bookings">Park Bookings</a></li>
                    <li class="breadcrumb-item active"><a href="#">{{$park_booking_details['park_name']}}</a></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card m-b-20">
                <div class="card-body">

                    <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#interests" role="tab" aria-selected="false">Interests</a>
                        </li>
                    </ul>

                    {{-- <div class="tab-content">
                        @include('admin.investors.partials._profile')
                        @include('admin.investors.partials._interests')
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
@stop
