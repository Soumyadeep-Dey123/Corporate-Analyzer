<!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
<!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
{{-- resources/views/contact-section.blade.php --}}
<section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Heading -->
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Get in Touch</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to transform your organization? We'd love to hear from you. Contact us today for a personalized
                demo.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Left column : contact info + custom‑solution card -->
            <div class="space-y-8">
                <!-- Contact info -->
                <div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">Contact Information</h3>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <flux:icon.map-pin class="w-6 h-6 text-blue-600 mt-1" />
                            <div>
                                <h4 class="font-semibold text-gray-900">Address</h4>
                                <p class="text-gray-600 leading-relaxed">
                                    123 Business District<br />New York, NY 10001
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <flux:icon.phone class="w-6 h-6 text-blue-600 mt-1" />
                            <div>
                                <h4 class="font-semibold text-gray-900">Phone</h4>
                                <p class="text-gray-600">+1 (555) 123‑4567</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <flux:icon.envelope class="w-6 h-6 text-blue-600 mt-1" />
                            <div>
                                <h4 class="font-semibold text-gray-900">Email</h4>
                                <p class="text-gray-600">hello@corporate‑analyzer.com</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <flux:icon.clock class="w-6 h-6 text-blue-600 mt-1" />
                            <div>
                                <h4 class="font-semibold text-gray-900">Business Hours</h4>
                                <p class="text-gray-600 leading-relaxed">
                                    Monday – Friday&nbsp; 9:00 AM – 6:00 PM<br />Saturday 10:00 AM – 4:00 PM
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right column : general message form -->
            @livewire('contact-form')
        </div>
    </div>
</section>
