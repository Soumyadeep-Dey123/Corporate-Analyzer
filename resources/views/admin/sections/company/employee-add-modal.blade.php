<!-- Add Employee Modal -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEmployeeModalLabel">Add New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addEmployeeForm" action="{{ route('admin.employee.store') }}" method="POST">
                    @csrf
                    <!-- Company Selection -->
                    <div class="mb-3">
                        <label for="company_id" class="form-label">Select Company</label>
                        <select name="company_id" id="company_id" class="form-select" required>
                            <option value="">-- Select Company --</option>
                            @foreach ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Employee_name" class="form-label">Employee Name</label>
                        <input type="text" class="form-control" id="Employee_name" name="Employee_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="Employee_email" class="form-label">Employee Email</label>
                        <input type="email" class="form-control" id="Employee_email" name="Employee_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="Employee_phone" class="form-label">Employee Phone</label>
                        <input type="text" class="form-control" id="Employee_phone" name="Employee_phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Account Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value=1>Active</option>
                            <option value=2>Inactive</option>
                            <option value=3>Blocked</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Survey Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value=1>Not Sent</option>
                            <option value=2>Sent - Not Submitted</option>
                            <option value=3>Submitted</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Employee</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Button to Open Modal -->
{{-- <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCompanyModal">Add Company</button> --}}
