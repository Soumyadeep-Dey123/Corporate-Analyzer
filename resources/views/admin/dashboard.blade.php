@extends('admin.sections.base')

@section('title')Home @endsection

@section('stylesheets')
{{-- <link rel="stylesheet" href="{{ asset('fontawesome\css\fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome\css\solid.min.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome\css\brands.min.css') }}">
<link rel="stylesheet" href="{{ asset('css\admin\master.css') }}">
<link rel="stylesheet" href="{{ asset('css\admin\components\navbar\navbar-dropdowns.css') }}">
<link rel="stylesheet" href="{{ asset('css\admin\components\sidebar\sidebar-default.css') }}"> --}}
@endsection

    @section('content')   
        
        @include('admin.sections.navbar')
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <!-- Flash Messages Section -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Welcome to Admin Dashboard</h3>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
    @endsection


