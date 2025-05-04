<!-- Status Change Modal -->
<div class="modal fade" id="changeStatusModal" tabindex="-1" aria-labelledby="changeStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeStatusModalLabel">Change Employee Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="statusChangeForm">
                    <div class="mb-3">
                        <label for="employeeStatus" class="form-label">Select New Status</label>
                        <select class="form-control" id="employeeStatus" name="account_status">
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                            <option value="3">Suspended</option>
                        </select>
                        <input type="hidden" id="employeeId" name="employee_id">
                    </div>
                </form>
                <p>Current Status: <span id="currentStatusText"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveStatusBtn">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Survey Status Change Modal -->
<div class="modal fade" id="changeSurveyStatusModal" tabindex="-1" aria-labelledby="changeSurveyStatusModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changeSurveyStatusModalLabel">Change Survey Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="surveyStatusChangeForm">
                    <div class="mb-3">
                        <label for="surveyStatus" class="form-label">Select New Survey Status</label>
                        <select class="form-control" id="surveyStatus" name="survey_status">
                            <option value="1">Completed</option>
                            <option value="2">Pending</option>
                            <option value="3">Not Started</option>
                        </select>
                        <input type="hidden" id="surveyEmployeeId" name="employee_id">
                    </div>
                </form>
                <p>Current Survey Status: <span id="currentSurveyStatusText"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveSurveyStatusBtn">Save Changes</button>
            </div>
        </div>
    </div>
</div>
