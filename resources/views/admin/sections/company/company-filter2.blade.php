
    <div class="row">
      <!-- Left Column: Dropdown Filter -->
      <div class="col-md-9">
        <div class="dropdown position-relative">
          <button class="btn btn-outline-secondary dropdown-toggle" 
                  type="button" 
                  id="companyFilterDropdown" 
                  data-bs-toggle="dropdown" 
                  aria-expanded="false">
            <i class="fas fa-building"></i> Select Companies
          </button>
          <div class="dropdown-menu p-3" 
               aria-labelledby="companyFilterDropdown" 
               style="width: 300px; max-height: 300px; overflow-y: auto; z-index: 1055;">
            <!-- Search Box -->
            <div class="mb-2">
              <input type="text" class="form-control" id="companySearch" placeholder="Search companies...">
            </div>
            <div class="dropdown-divider"></div>
            <!-- Company Checkboxes -->
            <div id="companyCheckboxes">
              @php $i=1; @endphp
              @foreach ($companies as $companyVal)  
                <div class="form-check mb-2">
                  <input class="form-check-input company-checkbox" type="checkbox" value="{{$companyVal->id}}" id="company{{$i}}">
                  <label class="form-check-label" for="company{{$i}}">{{$companyVal->company_name}}</label>
                </div>
                @php $i++; @endphp
              @endforeach
              
              <!-- Add more companies as needed -->
            </div>
          </div>
        </div>
      </div>
      <!-- Right Column: Filter Action Buttons -->
      <div class="col-md-3 text-end">
        <button id="applyFilter" class="btn btn-primary">
          <i class="fas fa-check"></i> Apply Filter
        </button>
        <button id="clearFilter" class="btn btn-secondary ms-2">
          <i class="fas fa-times"></i> Clear Filter
        </button>
      </div>
    </div>
  