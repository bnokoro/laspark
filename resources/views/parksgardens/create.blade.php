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

{{--Create Parks and Gardens Start --}}
                       
                        <div class="card card-default">
                            <div class="card-header">
                                {{isset($parksgarden) ? 'Edit Parks and Gardens' : 'Create Parks and Gardens' }}
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

                                        <label for="name">Availability</label>
                                        <select class="form-control" id="availability" name="availability" value="{{ isset ($parksgarden) ? $parksgarden->availability : '' }}">
                                            <option>0</option>
                                            <option>1</option>
                                        </select>
                                    
                                         <label for="name">Status</label>
                                        <input type="text" id="status" class="form-control" name="status" value="{{ isset ($parksgarden) ? $parksgarden->status : '' }}">
                                    </div>
                                        <div class="form-group">
                                            <button class="btn btn-success">
                                                {{ isset ($parksgarden) ? 'Update Parks and Gardens' : 'Add Parks and Gardens' }}
                                            </button>
                                        </div>
                            </form>
                            </div>
                        </div>
                                
                                
{{--Create Parks and Gardens End --}}
                       


@endsection