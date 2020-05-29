@extends('layouts.app')

@section('content')

{{--Create Services Start --}}
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
                                        <div class="page-title-box"><h4 class="page-title">{{isset($service) ? 'Edit' : 'Create ' }} Services</h4>
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="/admin/services">Services</a></li>
                                                <li class="breadcrumb-item active"><a href="#">{{isset($service) ? 'Edit' : 'Create ' }} Services</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card m-b-20">
                                    <div class="card-body">

                                          {{-- <form action="{{ isset($service) ? route('services.update', $service->id) :  route('services.store') }}" method="POST"> --}}
                                                <form id="service-form" data-id="{{$service ? $service->id : ''}}" action="{{$action}}" data-editing="{{!!$service}}" method="post" enctype="multipart/form-data">
                                                @csrf

                                                @if(isset($service))

                                                @method('PUT')

                                                @endif

                                                <div class="form-group">
            
                                                <label for="name">Service Name</label>
                                                <input type="text" id="service_name" class="form-control" name="service_name" value="{{ isset ($service) ? $service->service_name : '' }}">
                                                @error('service_name')
                                                    <span>{{$message}}</span>
                                                @enderror
                                                </div>
                                                <div class="form-group">
                                                    
                                                    <label for="name">Description</label>
                                                    <textarea rows="3" id="description" class="form-control" name="description">{{ isset ($service) ? $service->description : '' }}</textarea>
                                                    @error('description')
                                                        <span>{{$message}}</span>
                                                    @enderror
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="">Service Images</label>
                                                    <input
                                                        type="file"
                                                        id="file-pond"
                                                        class="filepond text-danger"
                                                        name="filepond"
                                                        multiple
                                                        data-max-files="1">
                                                    @error('service_image')
                                                        <span>{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Service Icons</label>
                                                    <input
                                                        type="file"
                                                        id="file-pond"
                                                        class="filepond text-danger"
                                                        name="filepond"
                                                        multiple
                                                        data-max-files="1">
                                                        @error('service_icon')
                                                            <span>{{$message}}</span>
                                                        @enderror
                                                </div>
                                                
                                                <div class="form-group">
                                                        <button class="btn btn-primary">
                                                            {{ isset ($service) ? 'Update Services' : 'Add Services' }}
                                                        </button>
                                                </div>
                            </form>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>

                                
                                
{{--Create Services End --}}
                       


@stop

