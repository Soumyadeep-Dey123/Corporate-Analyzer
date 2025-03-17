@extends('admin.sections.base')

@section('title') Company List @endsection

@section('stylesheets') 
<link rel="stylesheet" href="{{ asset('datatables/datatables.min.css') }}">

@endsection

@section('content')   

@include('admin.sections.navbar')
<div id="body" class="active">
<div class="content">
<div class="container">
        <div class="row">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="col-md-12 col-lg-12 shadow">
                <div class="card">
                    <div class="card-header"><h3>Company List Table</h3>
                        @php
                            $add_title = "Add New Company";
                        @endphp
                        <i class="fa " aria-hidden="true">
                            <button type="button" class="fa-plus btn btn-primary" title="{{ $add_title }}" data-bs-toggle="modal" data-bs-target="#addCompanyModal">
                                
                            </button>
                        </i>
                    </div>
                    <div class="card-body">
                        <p class="card-title"></p>
                        <table class="table table-hover" id="dataTables-example" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Company Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                <tr class="{{ $company->status_class }}">
                                    <td>{{ $company->id }}</td>
                                    <td>{{ $company->company_name }}</td>
                                    <td>{{ $company->company_email }}</td>
                                    <td>{{ $company->company_phone }}</td>
                                    <td>{{ $company->company_address }}</td>
                                    <!-- Display the status label with the appropriate CSS class -->
                                    <td align="center">
                                        @php
                                        if($company->status==1){
                                            $icon = "square-check";
                                            $icolor = "green";
                                            $title = "Click to Inactive";
                                        }else{
                                            $icon = "square-xmark";
                                            $icolor = "red";
                                            $title = "Click to Active";
                                        }
                                        @endphp
                                        <a href="#" class="confirm-redirect" data-url="{{ route('admin.companies.status-update', ['id' => $company->id]) }}">
                                            <i style="color:{{$icolor}}" class="company-status fa-solid fa-{{$icon}}" title="{{$title}}"></i>
                                        </a>
                                    </td>
                                    <td>
                                        @php
                                        $edit_title = "Edit Company Details";
                                        @endphp
                                        <i class="fas" title="{{$edit_title}}"><button type="button" class="fas fa-edit btn btn-warning edit-btn" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#editModal"
                                            data-id="{{ $company->id }}"
                                            data-name="{{ $company->company_name }}"
                                            data-email="{{ $company->company_email }}"
                                            data-phone="{{ $company->company_phone }}"
                                            data-address="{{ $company->company_address }}"
                                            >
                                        </button>
                                    </i>
                                    </td>
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
@include('admin.sections.company.company-modal')
@include('admin.sections.company.company-add-modal')


@endsection

@section('js-files') 
<script src="{{ asset('datatables/datatables.min.js') }}"></script>
<script src="{{ asset('js/admin/initiate-datatables.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var editModal = document.getElementById("editModal");
    
        editModal.addEventListener("show.bs.modal", function (event) {
            var button = event.relatedTarget; 
    
            var id = button.getAttribute("data-id");
            var name = button.getAttribute("data-name");
            var email = button.getAttribute("data-email");
            var phone = button.getAttribute("data-phone");
            var address = button.getAttribute("data-address");
    
            document.getElementById("edit_id").value = id;
            document.getElementById("edit_name").value = name;
            document.getElementById("edit_email").value = email;
            document.getElementById("edit_phone").value = phone;
            document.getElementById("edit_address").value = address;
            
    
            document.getElementById("editForm").action = "{{ route('admin.companies.update', '') }}/" + id;
        });
    });

    $(document).ready(function() {
        $('.confirm-redirect').on('click', function(e) {
            e.preventDefault(); // Prevent the default anchor behavior

            // Retrieve the redirect URL from the data attribute
            let redirectUrl = $(this).data('url');

            // Show a confirmation dialog
            if (confirm('Are you sure you want to proceed?')) {
                // If confirmed, redirect to the specified URL
                window.location.href = redirectUrl;
            }
        });
    });



    </script>
    
@endsection