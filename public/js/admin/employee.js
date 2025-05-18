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
        var employeeId = button.data('employee-id-status'); // Extract employee ID
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
                    var row = $('i[data-employee-id-status="' + employeeId + '"]');
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