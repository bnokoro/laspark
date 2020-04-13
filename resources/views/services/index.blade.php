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

{{-- Services Start --}}
                        <div class="d-flex justify-content-end mb-4">

                            <a href="{{ route('services.create') }}" class="btn btn-success">Add Services</a>

                        </div>
                        <div class="card card-default">
                            <div class="card-header">Services</div>

                        <div class="card-body">
                            <table class="table">

                                <thead>

                                     <th>
                                        Services
                                    </th>

                                    <th>
                                        Description
                                    </th>
                                    <th></th>
                                    <th></th>


                                </thead>

                                <tbody>
                                    @foreach($services as $service)
                                    <tr>
                                        <td>
                                             {{$service->service}}
                                        </td>

                                        <td>
                                             {{$service->description}}
                                        </td>

                                        <td>
                                             <a href="{{ route('services.edit', $service->id) }}" class="btn btn-info btn-sm">
                                                Edit
                                             </a>
                                        </td>
                                        <td>
                                             <button class="btn btn-danger btn-sm" onclick="handleDelete({{$service->id}})">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>

                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">

                    <form action="" method="POST" id="deleteServicesForm">

                        @method('DELETE')
                        @csrf
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Delete Services</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center text-bold">
                                    Are you sure you want to delete this Service ?
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

            var form = document.getElementById('deleteServicesForm')

            form.action = '/services/' + id

             console.log('deleting.', form)

            $('#deleteModal').modal('show')
        }

    </script>

@endsection
