<!-- Bootstrap Modal -->
<!-- Company Edit Company Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <input type="hidden" id="edit_id" name="id">
                    
                    <div class="mb-3">
                        <label for="edit_name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="edit_name" name="company_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="edit_email" class="form-label">Company Email</label>
                        <input type="email" class="form-control" id="edit_email" name="company_email" required>
                    </div>

                    <div class="mb-3">
                        <label for="edit_phone" class="form-label">Company Phone</label>
                        <input type="text" class="form-control" id="edit_phone" name="company_phone" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>