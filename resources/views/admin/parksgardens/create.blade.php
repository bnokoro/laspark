@extends('layouts.app')

@section('content')


{{--Create Parks and Gardens Start --}}
                       
                         {{-- @if($errors->any())
                                <div class="alert allert-danger">
                                    <ul class="list-group">
                                        @foreach($errors->all() as $error)
                                        <li class="list-group-item text-danger">
                                            {{$error}}
                                        </li>
                                        @endforeach 
 
                                    </ul>
                                </div>
                                @endif  --}}
    
                            
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
                                        <div class="page-title-box"><h4 class="page-title">{{isset($parksgarden) ? 'Edit' : 'Create ' }} Parks and Gardens</h4>
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="/admin/parksgardens">Parks and Gardens</a></li>
                                                <li class="breadcrumb-item active"><a href="#">{{isset($parksgarden) ? 'Edit' : 'Create ' }} Parks and Gardens</a></li>
                                            </ol>
                                        </div>
                                    </div>
                            </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card m-b-20">
                                  <div class="card-body">

                                        {{-- <form action="{{ isset($parksgarden) ? route('parksgardens.update', $parksgarden->id) :  route('parksgardens.store') }}" method="POST" enctype="multipart/form-data"> --}}
                                        <form id="parkgarden-form" data-id="{{$parksgarden ? $parksgarden->id : ''}}" action="{{$action}}" data-editing="{{!!$parksgarden}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            @if(isset($parksgarden))

                                            @method('PUT')

                                            @endif

                                   <div class="row ">

                                    <div class="form-group col-md-6">
  
                                        <label for="name">Park Name</label>
                                        <input type="text" id="park_name" class="form-control" name="park_name" value="{{ isset ($parksgarden) ? $parksgarden->park_name : '' }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="name">Availability</label>
                                            <select class="form-control" id="availability" name="availability" value="{{ isset ($parksgarden) ? $parksgarden->availability : '' }}">
                                                <option>Select</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>     
                                    </div>  

                                   </div>
                                    

                                    <div class="form-group">
                                        
                                        <label for="name">Description</label>
                                        <textarea rows="3" id="description" class="form-control" name="description">{{ isset ($parksgarden) ? $parksgarden->description : '' }}</textarea>
                                       
                                    </div>
                                        
                                    <div class="form-group">
                                        <label for="">Park Images</label>
                                        <input
                                            type="file"
                                            id="file-pond"
                                            class="filepond"
                                            name="filepond"
                                            multiple
                                            data-max-files="3">
                                    </div>

                                    
                                    <div class="row">
                                        
                                    <div class="form-group col-md-6">
  
                                        <label for="name">Price</label>
                                        <input type="text" id="price" class="form-control" name="price" value="{{ isset ($parksgarden) ? $parksgarden->price : '' }}">
                                    </div>

                                         <div class="form-group col-md-6">
                                        
                                        <label for="name">Trees</label>
                                        <input type="text" id="trees" class="form-control" name="trees" value="{{ isset ($parksgarden) ? $parksgarden->trees : '' }}">
                                    
                                    </div>

                                    <div class="form-group col-md-6">
                                        
                                        <label for="name">Toilets</label>
                                        <input type="text" id="toilets" class="form-control" name="toilets" value="{{ isset ($parksgarden) ? $parksgarden->toilets : '' }}">

                                     </div>
                                       
                                     <div class="form-group col-md-6">
                                        <label for="name">Land Area</label>
                                        <input type="text" id="land_area" class="form-control" name="land_area" value="{{ isset ($parksgarden) ? $parksgarden->land_area : '' }}">

                                     </div>

                                        
                                    <div class="form-group col-md-6">
                                            <label for="latitude">Latitude</label>
                                            <input type="text" id="latitude" class="form-control" name="latitude" value="{{ isset ($parksgarden) ? $parksgarden->latitude : '' }}">
                                    </div>
                                         
                                    <div class="form-group col-md-6">
                                            
                                            <label for="longitude">Longtitude</label>
                                            <input type="text" id="longitude" class="form-control" name="longitude" value="{{ isset ($parksgarden) ? $parksgarden->longitude : '' }}">
                                    </div>
                                        
                                   
                                    </div>
                                   
                                    <div class="form-group">
                                            <button class="btn btn-primary">
                                                {{ isset ($parksgarden) ? 'Update Parks and Gardens' : 'Add Parks and Gardens' }}
                                            </button>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                
                                
{{--Create Parks and Gardens End --}}
                       


@stop

