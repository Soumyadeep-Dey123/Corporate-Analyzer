@extends('admin.sections.base')

@section('title')Employee List @endsection

@section('stylesheets') 
<link rel="stylesheet" href="{{ asset('datatables/datatables.min.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" > --}}
@endsection

@section('content')   
        
        @include('admin.sections.navbar')

        <div id="body" class="active">
                <div class="content">
                <div class="container">
                        <div class="row">
                
                        <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header"><h3>Employee List Table</h3></div>

                                    {{-- <div class="filter-container">
                                        <select class="form-select" id="companyFilter" multiple style="min-width: 250px;">
                                            <option value="">All Companies</option>
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                            @endforeach
                                        </select>
                                        <button id="applyFilter" class="btn btn-primary btn-sm ms-2">Apply Filter</button>
                                    </div> --}}
                                    <!-- Insert the company filter section here -->
                                    @include('admin.sections.company.company-filter2')
                                    <div class="card-body">
                                        <p class="card-title"></p>
                                        <table class="table table-hover" id="dataTables-example" width="100%">
                                            <thead>
                                                <tr>
                                                        <th>ID</th>
                                                        <th>Employee Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Company</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @foreach ($employees as $employee)
                                                <tr>
                                                    <td>{{ $employee->id }}</td>
                                                    <td>{{ $employee->users_name }}</td>
                                                    <td>{{ $employee->users_email }}</td>
                                                    <td>{{ $employee->users_phone }}</td>
                                                    <td data-company-id="{{ $employee->company_id }}">{{ $employee->company->company_name ?? 'N/A' }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                        
                </div>
                </div>
                </div>
                </div>

@endsection

@section('js-files') 
<script src="{{ asset('datatables/datatables.min.js') }}"></script>
<script src="{{ asset('js/admin/initiate-datatables.js') }}"></script>
@endsection

