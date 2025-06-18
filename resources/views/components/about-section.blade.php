<!-- It is never too late to be what you might have been. - George Eliot -->
<!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->

{{-- resources/views/about-section.blade.php --}}
<section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Intro -->
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                About Corporate‑Analyzer
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We're on a mission to transform how organizations understand and engage with their workforce through
                powerful analytics and insights.
            </p>
        </div>

        <!-- Two‑column block -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <div class="space-y-6">
                <h3 class="text-2xl font-semibold text-gray-900">
                    Transforming Organizations Through Data
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    Founded in 2020, Corporate‑Analyzer has helped over 500 organizations worldwide improve employee
                    engagement,
                    reduce turnover, and create more inclusive workplace cultures. Our platform combines advanced
                    analytics with
                    intuitive design to make data‑driven decision making accessible to everyone.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    We believe that every voice matters, and our technology ensures that every employee's feedback is
                    heard,
                    analyzed, and acted upon. From startups to Fortune 500 companies, we're proud to be the trusted
                    partner
                    for organizations committed to creating better workplaces.
                </p>
            </div>

            <div class="relative">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80"
                    alt="Team collaboration" class="rounded-2xl shadow-xl w-full h-auto" />
            </div>
        </div>

        <!-- Values -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Mission -->
            <div class="text-center space-y-4">
                <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mx-auto">
                    <flux:icon.rocket-launch class="w-8 h-8 text-blue-600" />
                </div>
                <h4 class="text-xl font-semibold text-gray-900">Our Mission</h4>
                <p class="text-gray-600 leading-relaxed">
                    To empower organizations with actionable insights that drive meaningful change and improve workplace
                    culture.
                </p>
            </div>

            <!-- Values -->
            <div class="text-center space-y-4">
                <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mx-auto">
                    <flux:icon.user-group class="w-8 h-8 text-blue-600" />
                </div>
                <h4 class="text-xl font-semibold text-gray-900">Our Values</h4>
                <p class="text-gray-600 leading-relaxed">
                    Integrity, innovation, and collaboration are at the heart of everything we do for our clients and
                    partners.
                </p>
            </div>

            <!-- Excellence -->
            <div class="text-center space-y-4">
                <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mx-auto">
                    <flux:icon.trophy class="w-8 h-8 text-blue-600" />
                </div>
                <h4 class="text-xl font-semibold text-gray-900">Excellence</h4>
                <p class="text-gray-600 leading-relaxed">
                    We strive for excellence in every solution, ensuring the highest quality and reliability for our
                    users.
                </p>
            </div>

            <!-- Global Impact -->
            <div class="text-center space-y-4">
                <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center mx-auto">
                    <flux:icon.globe-alt class="w-8 h-8 text-blue-600" />
                </div>
                <h4 class="text-xl font-semibold text-gray-900">Global Impact</h4>
                <p class="text-gray-600 leading-relaxed">
                    Making a positive impact on organizations worldwide through data‑driven insights and solutions.
                </p>
            </div>
        </div>
    </div>
</section>
