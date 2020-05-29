@extends('layouts.app')

@section('content')

@if(session()->has('success'))
<div class="alert alert-primary">
{{ session()->get('success') }}
</div>
 @elseif(session()->has('error'))
<div class="alert alert-danger">
{{ session()->get('error') }}
</div>
@endif


<div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">
                    Services
                    <div class="d-flex justify-content-end mb-2 pt-2">
                        <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm waves-effect waves-light pull-right">
                        <i class="fa fa-plus"></i>
                    Add Services
                    </a>
                    </div>
                    
                    </h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Services</a></li>
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
                                        Service Name
                                    </th>
                                     <th>
                                        Description
                                    </th>
                                    <th>
                                       Service Image
                                    </th> 
                                    <th>
                                       Service Icon
                                    </th>
                                     <th width="250">
                                        Action
                                    </th>
                              </thead>

                                <tbody>
                                    @foreach($services as $service)
                                    <tr>
                                        <td>
                                             {{$sn++}}
                                        </td>
                                        <td>
                                             {{$service->service_name}}
                                        </td>

                                        <td>
                                             {{ \App\Helpers\StrHelper::limit($service->description)}}
                                        </td>

                                         <td>
                                             {{$service->service_image}}
                                        </td>

                                         <td>
                                             {{$service->service_icon}}
                                        </td>

                                        <td>
                                             <a href="/admin/services/{{$service->id}}/edit"
                                                class="btn btn-info btn-sm">
                                                 Edit
                                              </a> 
                                              <button
                                                class="btn btn-danger btn-sm waves-effect waves-light delete-button"
                                                data-toggle="modal"
                                                data-url="/admin/services/{{$service->id}}"
                                                data-target="#delete-services">
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
        @include('admin.services.partials._delete')
</div>

@stop


{{-- Services End --}}



