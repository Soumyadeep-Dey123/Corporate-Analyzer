<!-- Add Company Modal -->
<div class="modal fade" id="addCompanyModal" tabindex="-1" aria-labelledby="addCompanyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCompanyModalLabel">Add New Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addCompanyForm" action="{{ route('admin.companies.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="company_name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="company_email" class="form-label">Company Email</label>
                        <input type="email" class="form-control" id="company_email" name="company_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="company_phone" class="form-label">Company Phone</label>
                        <input type="text" class="form-control" id="company_phone" name="company_phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="company_address" class="form-label">Company Address</label>
                        <textarea class="form-control" id="company_address" name="company_address" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value=0>Active</option>
                            <option value=1>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Company</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Button to Open Modal -->
{{-- <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCompanyModal">Add Company</button> --}}
