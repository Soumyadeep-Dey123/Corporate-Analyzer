<div class="card mb-3">
    <div class="card-header">
      <h5><i class="fas fa-filter"></i> Filter Employees</h5>
    </div>
    <div class="card-body">
      <div class="row">
        <!-- Left Column: Dropdown Filter -->
        <div class="col-md-6">
          <div class="dropdown position-relative">
            <button class="btn btn-outline-secondary dropdown-toggle" 
                    type="button" 
                    id="companyFilterDropdown" 
                    data-bs-toggle="dropdown" 
                    data-bs-auto-close="outside" 
                    aria-expanded="false">
                <i class="fas fa-building"></i> Select Companies
            </button>

            <div class="dropdown-menu p-3" 
                aria-labelledby="companyFilterDropdown" 
                style="width:300px; max-height:400px; overflow-y: auto; z-index: 1055;"
                data-bs-auto-close="outside">
              <!-- Search Box -->
              <div class="mb-2">
                <input type="text" class="form-control" id="companySearch" placeholder="Search companies...">
              </div>
              <div class="dropdown-divider"></div>
              <!-- Company Checkboxes -->
              <div id="companyCheckboxes">
                <div class="form-check mb-2">
                  <input class="form-check-input company-checkbox" type="checkbox" value="1" id="company1">
                  <label class="form-check-label" for="company1">Apple Inc.</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input company-checkbox" type="checkbox" value="2" id="company2">
                  <label class="form-check-label" for="company2">Microsoft Corp.</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input company-checkbox" type="checkbox" value="3" id="company3">
                  <label class="form-check-label" for="company3">Google LLC</label>
                </div>
                <!-- Add more companies as needed -->
              </div>
            </div>
          </div>
        </div>
        <!-- Right Column: Filter Action Buttons -->
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
  
  <!-- Minimal jQuery Script for Search Filtering -->
  <script>
    /* $(document).ready(function(){
      // Simple search functionality for company checkboxes
      $("#companySearch").on("keyup", function(){
        var value = $(this).val().toLowerCase();
        $("#companyCheckboxes .form-check").filter(function(){
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
      });
      
      // Placeholder actions for Apply/Clear Filter
      $("#applyFilter").click(function(e){
        e.preventDefault();
        // Retrieve checked companies for further processing
        var selected = [];
        $(".company-checkbox:checked").each(function(){
          selected.push($(this).val());
        });
        console.log("Selected companies:", selected);
        // Implement further filtering logic here
      });
      
      $("#clearFilter").click(function(e){
        e.preventDefault();
        $(".company-checkbox").prop("checked", false);
      });
    }); */
  </script>
  