@extends('layouts.app')

@section('content')


{{--Create Parks and Gardens Start --}}
                       
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

                            <form action="{{ isset($parksgarden) ? route('parksgardens.update', $parksgarden->id) :  route('parksgardens.store') }}" method="POST">
                            
                                    @csrf

                                    @if(isset($parksgarden))

                                    @method('PUT')

                                    @endif

                                    <div class="form-group">
  
                                        <label for="name">Price</label>
                                        <input type="text" id="price" class="form-control" name="price" value="{{ isset ($parksgarden) ? $parksgarden->price : '' }}">

                                    
                                        <label for="name">Description</label>
                                        <textarea rows="3" id="description" class="form-control" name="description">{{ isset ($parksgarden) ? $parksgarden->description : '' }}</textarea>
                                        {{-- <input id="description" type="hidden" name="description" class="form-control">
                                        <trix-editor input="description"></trix-editor> --}}

                                        <label for="name">Trees</label>
                                        <input type="text" id="trees" class="form-control" name="trees" value="{{ isset ($parksgarden) ? $parksgarden->trees : '' }}">

                                        <label for="name">Toilets</label>
                                        <input type="text" id="toilets" class="form-control" name="toilets" value="{{ isset ($parksgarden) ? $parksgarden->toilets : '' }}">


                                        <label for="name">Land Area</label>
                                        <input type="text" id="land_area" class="form-control" name="land_area" value="{{ isset ($parksgarden) ? $parksgarden->land_area : '' }}">
                                        
                                        <label for="name">Availability</label>
                                        <select class="form-control" id="availability" name="availability" value="{{ isset ($parksgarden) ? $parksgarden->availability : '' }}">
                                             <option>Select</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    
                                         <label for="name">Status</label>
                                        <input type="text" id="status" class="form-control" name="status" value="{{ isset ($parksgarden) ? $parksgarden->status : '' }}">
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
                       


@endsection


{{-- 
@section('scripts')
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>

@endsection



@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">

@endsection --}}