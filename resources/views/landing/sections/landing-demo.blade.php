<!-- Demo Section -->
<section class="hero-section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-8">
        <h2 class="section-title mb-3">Experience SurveyHub in Action</h2>
        <p class="lead text-muted">Try our interactive demo to see how SurveyHub can transform your organization's feedback process.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="bg-light rounded-4 shadow p-4">
          <!-- Demo Header -->
          <div class="bg-white border rounded p-3 mb-4">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="mb-0">SurveyHub Interactive Demo</h5>
              <div>
                <span class="badge bg-success me-2">Employee Dashboard</span>
                <small class="text-muted">Demo User: John Smith</small>
              </div>
            </div>
          </div>

          <!-- Tabs -->
          <ul class="nav nav-tabs mb-3" id="demoTabs" role="tablist">
            <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#surveys" type="button">My Surveys</button></li>
            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#create" type="button">Create Survey</button></li>
            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#results" type="button">Results</button></li>
            <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#templates" type="button">Templates</button></li>
          </ul>

          <div class="tab-content p-3 border border-top-0 rounded-bottom bg-white">
            <!-- Tab: My Surveys -->
            <div class="tab-pane fade show active" id="surveys">
              <div class="table-responsive">
                <table class="table table-hover align-middle">
                  <thead class="table-light">
                    <tr>
                      <th>Survey Name</th>
                      <th>Status</th>
                      <th>Responses</th>
                      <th>Created</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Q2 Employee Satisfaction</td>
                      <td><span class="badge bg-success">Active</span></td>
                      <td>45/60</td>
                      <td>May 10, 2023</td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">View</button>
                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                      </td>
                    </tr>
                    <tr>
                      <td>Work From Home Assessment</td>
                      <td><span class="badge bg-warning text-dark">Draft</span></td>
                      <td>0/0</td>
                      <td>May 12, 2023</td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">View</button>
                        <button class="btn btn-sm btn-outline-secondary">Edit</button>
                      </td>
                    </tr>
                    <tr>
                      <td>Management Performance Review</td>
                      <td><span class="badge bg-danger">Closed</span></td>
                      <td>58/60</td>
                      <td>April 5, 2023</td>
                      <td>
                        <button class="btn btn-sm btn-outline-primary">View</button>
                        <button class="btn btn-sm btn-outline-secondary">Report</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Tab: Create Survey -->
            <div class="tab-pane fade" id="create">
              <div class="mb-3">
                <label for="surveyTitle" class="form-label">Survey Title</label>
                <input type="text" class="form-control" id="surveyTitle" placeholder="Enter survey title">
              </div>
              <div class="mb-3">
                <label for="surveyDescription" class="form-label">Description</label>
                <textarea class="form-control" id="surveyDescription" rows="3" placeholder="Enter survey description"></textarea>
              </div>
              <div class="mb-4">
                <label class="form-label">Question Types</label>
                <div class="d-flex flex-wrap gap-2">
                  <button class="btn btn-sm btn-outline-primary">Multiple Choice</button>
                  <button class="btn btn-sm btn-outline-primary">Rating Scale</button>
                  <button class="btn btn-sm btn-outline-primary">Open Text</button>
                  <button class="btn btn-sm btn-outline-primary">Yes/No</button>
                  <button class="btn btn-sm btn-outline-primary">Dropdown</button>
                </div>
              </div>

              <div class="card mb-3">
                <div class="card-header bg-light">Question 1</div>
                <div class="card-body">
                  <input type="text" class="form-control mb-2" placeholder="Enter your question here">
                  <select class="form-select mb-2">
                    <option selected>Select question type</option>
                    <option>Multiple Choice</option>
                    <option>Rating Scale</option>
                    <option>Open Text</option>
                  </select>
                  <button class="btn btn-sm btn-outline-secondary">Add Options</button>
                </div>
              </div>

              <div class="d-flex gap-2">
                <button class="btn btn-primary">Add Question</button>
                <button class="btn btn-success">Save Survey</button>
              </div>
            </div>

            <!-- Tab: Results -->
            <div class="tab-pane fade" id="results">
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">Response Rate</div>
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="progress flex-grow-1 me-3" style="height: 30px;">
                          <div class="progress-bar bg-success" style="width: 75%;">75%</div>
                        </div>
                        <span class="fs-5">45/60</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">Average Rating</div>
                    <div class="card-body text-center">
                      <div class="display-5 mb-2">4.2/5</div>
                      <div class="text-warning fs-4">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-4">
                <div class="card-header">Survey Results Visualization</div>
                <div class="card-body">
                  <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" alt="Results Chart" class="img-fluid rounded">
                </div>
              </div>
            </div>

            <!-- Tab: Templates -->
            <div class="tab-pane fade" id="templates">
              <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- Template Card -->
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">Employee Satisfaction</h5>
                      <p class="card-text">15 questions covering work environment, management, and personal growth.</p>
                      <button class="btn btn-sm btn-primary">Use Template</button>
                    </div>
                    <div class="card-footer text-muted">
                      <small>10 questions • 5-10 min</small>
                    </div>
                  </div>
                </div>
                <!-- Additional cards... -->
                <!-- (Repeat same structure for other templates) -->
              </div>
            </div>
          </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-5">
          <h3 class="fw-bold mb-2">Ready to Get Started?</h3>
          <p class="text-muted mb-4">Experience all the features with a full-access free trial. No credit card required.</p>
          <button class="btn btn-lg btn-primary px-5">Start Free Trial</button>
        </div>
      </div>
    </div>
  </div>
</section>
