{{-- <style>
    /* Ensure dropdowns appear above other elements */
.dropdown-menu {
    z-index: 1055 !important;
}

/* Fix for specific dropdown in filter section */
#companyFilterDropdown + .dropdown-menu {
    z-index: 1055 !important;
}

/* Ensure the dropdown container has the proper positioning */
.dropdown {
    position: relative;
}
</style> --}}

<div class="card mb-3">
    <div class="card-header">
        <h5><i class="fas fa-filter"></i> Filter Employees</h5>
    </div>

    <div class="card-body">
        <div class="row">
            <!-- Left Column: Dropdown -->
            <div class="col-md-6">
                <div class="dropdown position-relative">
                    <button class="btn btn-outline-secondary dropdown-toggle" 
                            type="button" 
                            id="companyFilterDropdown" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false">
                        <i class="fas fa-building"></i> Select Companies
                    </button>

                    <!-- The Dropdown Menu -->
                    <div class="dropdown-menu p-3" 
                         aria-labelledby="companyFilterDropdown" 
                         style="width: 300px; max-height: 400px; overflow-y: auto; z-index: 1055;">

                        <!-- Buttons for Select All / Clear All -->
                        <div class="mb-2">
                            <button id="selectAll" class="btn btn-sm btn-outline-primary me-2">Select All</button>
                            <button id="clearAll" class="btn btn-sm btn-outline-secondary">Clear All</button>
                        </div>
                        <div class="dropdown-divider"></div>

                        <!-- Static Company Checkboxes -->
                        <div id="companyCheckboxes">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="1" id="company1">
                                <label class="form-check-label" for="company1">Apple Inc.</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="2" id="company2">
                                <label class="form-check-label" for="company2">Microsoft Corp.</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="3" id="company3">
                                <label class="form-check-label" for="company3">Google LLC</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="4" id="company4">
                                <label class="form-check-label" for="company4">Amazon.com Inc.</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="5" id="company5">
                                <label class="form-check-label" for="company5">Tesla Inc.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Filter Buttons -->
            <div class="col-md-6">
                <button id="applyFilter" class="btn btn-primary">
                    <i class="fas fa-check"></i> Apply Filter
                </button>
                <button id="clearFilter" class="btn btn-secondary ms-2">
                    <i class="fas fa-times"></i> Clear Filter
                </button>
            </div>
        </div>
    </div>
</div>

{{-- handles the Select All and Clear All buttons --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select All
        document.getElementById('selectAll').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelectorAll('#companyCheckboxes input[type="checkbox"]')
                .forEach(checkbox => checkbox.checked = true);
        });

        // Clear All
        document.getElementById('clearAll').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelectorAll('#companyCheckboxes input[type="checkbox"]')
                .forEach(checkbox => checkbox.checked = false);
        });
    });
</script>