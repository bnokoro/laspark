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
                                            <button class="btn btn-success">
                                                {{ isset ($service) ? 'Update Services' : 'Add Services' }}
                                            </button>
                                        </div>
                            </form>
                            </div>
                        </div>
                                
                                
{{--Create Services End --}}
                       


@endsection