@extends('layouts.app')
@section('content')

    @if(session()->has('success'))
        <div class="alert alert-primary">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box"><h4 class="page-title">Startups</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/admin/settings">Cms</a></li>
                    <li class="breadcrumb-item active"><a href="#">Edit Cms </a></li>
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
                            <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="false">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#pagetwo" role="tab" aria-selected="false">Page Two</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#aboutus" role="tab" aria-selected="false">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#faqs" role="tab" aria-selected="true">FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#support" role="tab" aria-selected="true">Support</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        @include('admin.settings.partials._home')
                        @include('admin.settings.partials._pagetwo')
                        @include('admin.settings.partials._aboutus')
                        @include('admin.settings.partials._faqs')
                        @include('admin.settings.partials._support')
                    </div> 

                </div>
            </div>
        </div>
    </div>

@stop



