@extends('layouts.app')

@section('content')

{{--Create Services Start --}}
                       
                        <div class="card card-default">
                            <div class="card-header">
                                {{isset($service) ? 'Edit Services' : 'Create Services' }}
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
                                          <form action="{{ isset($service) ? route('services.update', $service->id) :  route('services.store') }}" method="POST">
                            
                                                @csrf

                                                @if(isset($service))

                                                @method('PUT')

                                                @endif

                                                <div class="form-group">
            
                                                    <label for="name">Service</label>
                                                    <input type="text" id="service" class="form-control" name="service" value="{{ isset ($service) ? $service->service : '' }}">

                                                    <label for="name">Description</label>
                                                    <textarea rows="3" id="description" class="form-control" name="description">{{ isset ($service) ? $service->description : '' }}</textarea>

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
                       


@endsection


{{-- 
@section('scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
flatpickr('#time_booked')
</script>

@endsection --}}
{{-- 
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

@endsection --}}