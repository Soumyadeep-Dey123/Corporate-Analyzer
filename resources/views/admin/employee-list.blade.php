@extends('admin.sections.base')

@section('title')
    Employee List
@endsection

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('datatables/datatables.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" > --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    @include('admin.sections.navbar')

    <div id="body" class="active">
        <div class="content">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-inline-flex">
                                <h3>Employee List Table</h3>
                                @php
                                    $add_employee_title = 'Add New Employee';
                                @endphp
                                <i class="fa " aria-hidden="true">
                                    <button type="button" class="fa-plus btn btn-primary"
                                        style="margin-top: 5px; font-size: 8px; padding: 5px 8px; margin-left: 10px;"
                                        title="{{ $add_employee_title }}" data-bs-toggle="modal"
                                        data-bs-target="#addEmployeeModal">
                                    </button>
                                </i>
                            </div>
                            <!-- Insert the company filter section here -->
                            @include('admin.sections.company.company-filter')
                            <br>
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
                                            <th align="center" >Account Status</th>
                                            <th align="center" >Survey Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employees as $employee)
                                            <tr>
                                                <td>{{ $employee->id }}</td>
                                                <td>{{ $employee->users_name }}</td>
                                                <td>{{ $employee->users_email }}</td>
                                                <td>{{ $employee->users_phone }}</td>
                                                <td data-company-id="{{ $employee->company_id }}">
                                                    {{ $employee->company->company_name ?? 'N/A' }}</td>
                                                <!-- Display the Account status label -->
                                                <td align="center">
                                                    @php
                                                        if ($employee->account_status == 1) {
                                                            $status_icon = 'thumbs-up';
                                                            $status_icolor = 'green';
                                                            $status_text = 'Active';
                                                        } elseif ($employee->account_status == 2) {
                                                            $status_icon = 'thumbs-down';
                                                            $status_icolor = 'red';
                                                            $status_text = 'Inactive';
                                                        } elseif ($employee->account_status == 3) {
                                                            $status_icon = 'square-xmark';
                                                            $status_icolor = 'grey';
                                                            $status_text = 'Suspended';
                                                        }
                                                        $status_title = 'Click to Change Status';
                                                    @endphp
                                                    <i style="color:{{ $status_icolor }}"
                                                        class="company-status fa-solid fa-{{ $status_icon }}"
                                                        title="{{ $status_title }}" data-bs-toggle="modal"
                                                        data-bs-target="#changeStatusModal"
                                                        data-employee-id="{{ $employee->id }}"
                                                        data-current-status="{{ $employee->account_status }}"
                                                        data-current-text="{{ $status_text }}"></i>
                                                </td>
                                                <!-- Survey Status -->
                                                <td align="center">
                                                    @php
                                                        if ($employee->survey_status == 1) {
                                                            $survey_icon = 'check-circle';
                                                            $survey_icolor = 'green';
                                                            $survey_text = 'Completed';
                                                        } elseif ($employee->survey_status == 2) {
                                                            $survey_icon = 'hourglass-half';
                                                            $survey_icolor = 'orange';
                                                            $survey_text = 'Pending';
                                                        } elseif ($employee->survey_status == 3) {
                                                            $survey_icon = 'times-circle';
                                                            $survey_icolor = 'red';
                                                            $survey_text = 'Not Started';
                                                        }
                                                        $survey_title = 'Click to Change Survey Status';
                                                    @endphp
                                                    <i style="color:{{ $survey_icolor }}"
                                                        class="survey-status fa-solid fa-{{ $survey_icon }}"
                                                        title="{{ $survey_title }}" data-bs-toggle="modal"
                                                        data-bs-target="#changeSurveyStatusModal"
                                                        data-employee-id="{{ $employee->id }}"
                                                        data-current-survey-status="{{ $employee->survey_status }}"
                                                        data-current-survey-text="{{ $survey_text }}"></i>
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
    @include('admin.sections.company.employee-add-modal')
    @include('admin.sections.company.employee-status-modal')
@endsection

@section('js-files')
    <script src="{{ asset('datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('js/admin/initiate-datatables.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // jQuery functions
            $("#companySearch").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#companyCheckboxes .form-check").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });

            $("#applyFilter").click(function(e) {
                e.preventDefault();
                var selected = [];
                $(".company-checkbox:checked").each(function() {
                    selected.push($(this).val());
                });
                console.log("Selected companies:", selected);
            });

            $("#clearFilter").click(function(e) {
                e.preventDefault();
                $(".company-checkbox").prop("checked", false);
            });

            $('.confirm-redirect').on('click', function(e) {
                e.preventDefault();
                let redirectUrl = $(this).data('url');
                if (confirm('Are you sure you want to proceed?')) {
                    window.location.href = redirectUrl;
                }
            });

            // When the modal is triggered, populate it with employee data
            $('#changeStatusModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var employeeId = button.data('employee-id'); // Extract employee ID
                var currentStatus = button.data('current-status'); // Extract current status
                var currentStatusText = button.data('current-text'); // Extract current status text

                // Update modal content
                var modal = $(this);
                modal.find('#employeeId').val(employeeId);
                modal.find('#employeeStatus').val(currentStatus);
                modal.find('#currentStatusText').text(currentStatusText);
            });

            // Handle Save Changes button click
            $('#saveStatusBtn').click(function() {
                var employeeId = $('#employeeId').val();
                var newStatus = $('#employeeStatus').val();

                $.ajax({
                    url: '{{ route('admin.employees.status-update') }}', // Replace with your route
                    type: 'POST',
                    data: {
                        employee_id: employeeId,
                        account_status: newStatus,
                        _token: $('meta[name="csrf-token"]').attr('content') // Laravel CSRF token
                    },
                    success: function(response) {
                        if (response.success) {
                            // Update the icon and status in the table
                            var row = $('i[data-employee-id="' + employeeId + '"]');
                            var newIcon, newColor, newText;

                            if (newStatus == 1) {
                                newIcon = 'thumbs-up';
                                newColor = 'green';
                                newText = 'Active';
                            } else if (newStatus == 2) {
                                newIcon = 'thumbs-down';
                                newColor = 'red';
                                newText = 'Inactive';
                            } else if (newStatus == 3) {
                                newIcon = 'square-xmark';
                                newColor = 'grey';
                                newText = 'Suspended';
                            }

                            row.removeClass().addClass('company-status fa-solid fa-' + newIcon);
                            row.css('color', newColor);
                            row.data('current-status', newStatus);
                            row.data('current-text', newText);
                            row.attr('data-current-status', newStatus);
                            row.attr('data-current-text', newText);

                            // Close the modal
                            $('#changeStatusModal').modal('hide');

                            // Optional: Show success message
                            alert('Status updated successfully!');
                        } else {
                            alert('Failed to update status: ' + response.message);
                        }
                    },
                    error: function(xhr) {
                        var errorMessage = xhr.responseJSON && xhr.responseJSON.message ?
                            xhr.responseJSON.message :
                            'An error occurred while updating the status: ' + xhr.status + ' ' +
                            xhr.statusText;
                        alert(errorMessage);
                    }
                });
            });
            // When the survey status modal is triggered, populate it with employee data
            $('#changeSurveyStatusModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Button that triggered the modal
                var employeeId = button.data('employee-id'); // Extract employee ID
                var currentSurveyStatus = button.data(
                'current-survey-status'); // Extract current survey status
                var currentSurveyStatusText = button.data(
                'current-survey-text'); // Extract current survey status text

                // Update modal content
                var modal = $(this);
                modal.find('#surveyEmployeeId').val(employeeId);
                modal.find('#surveyStatus').val(currentSurveyStatus);
                modal.find('#currentSurveyStatusText').text(currentSurveyStatusText);
            });

            // Handle Save Changes button click for survey status
            $('#saveSurveyStatusBtn').click(function() {
                var employeeId = $('#surveyEmployeeId').val();
                var newSurveyStatus = $('#surveyStatus').val();

                $.ajax({
                    url: '{{ route('admin.employees.survey-status-update') }}',
                    type: 'POST',
                    data: {
                        employee_id: employeeId,
                        survey_status: newSurveyStatus,
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            // Update the icon and status in the table
                            var row = $('i[data-employee-id="' + employeeId +
                                '"][data-current-survey-status]');
                            var newIcon, newColor, newText;

                            if (newSurveyStatus == 1) {
                                newIcon = 'check-circle';
                                newColor = 'green';
                                newText = 'Completed';
                            } else if (newSurveyStatus == 2) {
                                newIcon = 'hourglass-half';
                                newColor = 'orange';
                                newText = 'Pending';
                            } else if (newSurveyStatus == 3) {
                                newIcon = 'times-circle';
                                newColor = 'red';
                                newText = 'Not Started';
                            }

                            row.removeClass().addClass('survey-status fa-solid fa-' + newIcon);
                            row.css('color', newColor);
                            row.data('current-survey-status', newSurveyStatus);
                            row.data('current-survey-text', newText);
                            row.attr('data-current-survey-status', newSurveyStatus);
                            row.attr('data-current-survey-text', newText);

                            // Close the modal
                            $('#changeSurveyStatusModal').modal('hide');

                            // Show success message
                            alert('Survey status updated successfully!');
                        } else {
                            alert('Failed to update survey status: ' + response.message);
                        }
                    },
                    error: function(xhr) {
                        var errorMessage = xhr.responseJSON && xhr.responseJSON.message ?
                            xhr.responseJSON.message :
                            'An error occurred while updating the survey status: ' + xhr
                            .status + ' ' + xhr.statusText;
                        alert(errorMessage);
                    }
                });
            });
        });
    </script>
@endsection
