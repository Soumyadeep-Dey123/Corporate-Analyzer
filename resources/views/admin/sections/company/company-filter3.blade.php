<!-- Filter Section -->
<div class="card mb-3">
    <div class="card-header">
      <h5><i class="fas fa-filter"></i> Filter Employees</h5>
    </div>
    <div class="card-body">
      <form id="filterForm">
        <div class="mb-3">
          <label class="form-label">Select Companies:</label>
          <div class="form-check">
            <input class="form-check-input company-checkbox" type="checkbox" value="1" id="company1">
            <label class="form-check-label" for="company1">Apple Inc.</label>
          </div>
          <div class="form-check">
            <input class="form-check-input company-checkbox" type="checkbox" value="2" id="company2">
            <label class="form-check-label" for="company2">Microsoft Corp.</label>
          </div>
          <div class="form-check">
            <input class="form-check-input company-checkbox" type="checkbox" value="3" id="company3">
            <label class="form-check-label" for="company3">Google LLC</label>
          </div>
          <div class="form-check">
            <input class="form-check-input company-checkbox" type="checkbox" value="4" id="company4">
            <label class="form-check-label" for="company4">Amazon.com Inc.</label>
          </div>
          <div class="form-check">
            <input class="form-check-input company-checkbox" type="checkbox" value="5" id="company5">
            <label class="form-check-label" for="company5">Tesla Inc.</label>
          </div>
        </div>
        <button type="button" id="applyFilter" class="btn btn-primary">
          <i class="fas fa-check"></i> Apply Filter
        </button>
        <button type="button" id="clearFilter" class="btn btn-secondary ms-2">
          <i class="fas fa-times"></i> Clear Filter
        </button>
      </form>
    </div>
  </div>

  <!-- Minimal jQuery Script for Filtering -->
<script>
    $(document).ready(function(){
      // Apply Filter: Show only rows whose data-company-id is among the checked companies.
      $("#applyFilter").click(function(e){
        e.preventDefault();
        var selected = [];
        $(".company-checkbox:checked").each(function(){
          selected.push($(this).val());
        });
        if(selected.length === 0){
          // If no company is selected, show all rows.
          $("#employeeTable tbody tr").show();
        } else {
          $("#employeeTable tbody tr").each(function(){
            var empCompany = $(this).data("company-id").toString();
            if(selected.indexOf(empCompany) > -1){
              $(this).show();
            } else {
              $(this).hide();
            }
          });
        }
      });
      
      // Clear Filter: Uncheck all checkboxes and show all rows.
      $("#clearFilter").click(function(e){
        e.preventDefault();
        $(".company-checkbox").prop("checked", false);
        $("#employeeTable tbody tr").show();
      });
    });
  </script>