<!-- Testimonials Section -->
<section class="testimonials-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">What Our Clients Say</h2>
            <p class="section-subtitle">Hear from organizations that have transformed their workplace with
                {{ config('app.name') }}</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Client"
                            class="testimonial-avatar">
                        <div class="ms-3">
                            <h4 class="mb-0">Sarah Johnson</h4>
                            <p class="text-muted mb-0">HR Director, TechCorp</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"{{ config('app.name') }} has revolutionized how we gather employee feedback. The
                        insights we've gained have directly contributed to a 24% increase in employee satisfaction
                        scores."</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Client"
                            class="testimonial-avatar">
                        <div class="ms-3">
                            <h4 class="mb-0">Michael Chen</h4>
                            <p class="text-muted mb-0">CEO, GrowthWorks</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"The analytics capabilities are impressive. We can quickly identify
                        trends and take action before small issues become big problems. It's been a game-changer for
                        our culture."</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center mb-4">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Client"
                            class="testimonial-avatar">
                        <div class="ms-3">
                            <h4 class="mb-0">Amelia Parker</h4>
                            <p class="text-muted mb-0">People Ops, Innovate Inc</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"{{ config('app.name') }} doesn't just help us collect data—it helps us understand
                        it. The platform has made it so much easier to implement meaningful changes based on
                        employee feedback."</p>
                </div>
            </div>
        </div>
    </div>
</section>