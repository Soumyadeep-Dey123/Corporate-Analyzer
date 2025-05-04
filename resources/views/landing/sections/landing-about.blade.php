<!-- About Us Section -->
<section id="about" class="about-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80"
                    alt="About {{ config('app.name') }}" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="section-title mb-4">About {{ config('app.name') }}
                </h2>
                <p class="mb-4">{{ config('app.name') }}
                    was founded in 2015 with a mission to revolutionize how organizations
                    collect and utilize employee feedback. We believe that every voice matters, and that
                    organizations thrive when employees feel heard and valued.</p>
                <p class="mb-4">Our team of HR professionals, data scientists, and software engineers work
                    together to create solutions that make the feedback process seamless, insightful, and
                    actionable.</p>
                <div class="row mt-5">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="about-icon me-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </div>
                            <div>
                                <h4 class="fs-5 mb-1">Our Mission</h4>
                                <p class="mb-0 text-muted">To empower organizations through meaningful feedback</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="about-icon me-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z" />
                                    <line x1="12" y1="12" x2="12" y2="21" />
                                    <line x1="12" y1="12" x2="4" y2="7.5" />
                                    <line x1="12" y1="12" x2="20" y2="7.5" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="fs-5 mb-1">Our Values</h4>
                                <p class="mb-0 text-muted">Transparency, innovation, and data-driven insights</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
