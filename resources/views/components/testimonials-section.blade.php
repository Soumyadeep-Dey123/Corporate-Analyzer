<!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
<!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
{{-- resources/views/testimonials-section.blade.php --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Don't just take our word for it. Here's what leaders from top organizations say about
                Corporate‑Analyzer.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- Sarah Johnson --}}
            <div class="hover:shadow-lg transition-shadow duration-300 border-0 shadow-md bg-white rounded-xl">
                <div class="p-8 space-y-6">
                    {{-- Rating --}}
                    <div class="flex space-x-1">
                        <flux:icon.star class="w-5 h-5 text-yellow-400 fill-current" />
                        <flux:icon.star class="w-5 h-5 text-yellow-400 fill-current" />
                        <flux:icon.star class="w-5 h-5 text-yellow-400 fill-current" />
                        <flux:icon.star class="w-5 h-5 text-yellow-400 fill-current" />
                        <flux:icon.star class="w-5 h-5 text-yellow-400 fill-current" />
                    </div>

                    {{-- Testimonial --}}
                    <p class="text-gray-700 leading-relaxed italic">
                        "Corporate‑Analyzer transformed how we understand our employees. The insights are invaluable and
                        have improved our retention by 40%."
                    </p>

                    {{-- Author --}}
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80"
                            alt="Sarah Johnson" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <div class="font-semibold text-gray-900">Sarah Johnson</div>
                            <div class="text-sm text-gray-600">HR Director</div>
                            <div class="text-sm text-blue-600">TechCorp Inc.</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Michael Chen --}}
            <div class="hover:shadow-lg transition-shadow duration-300 border-0 shadow-md bg-white rounded-xl">
                <div class="p-8 space-y-6">
                    <div class="flex space-x-1">
                        @for ($i = 0; $i < 5; $i++)
                            <flux:icon.star class="w-5 h-5 text-yellow-400 fill-current" />
                        @endfor
                    </div>
                    <p class="text-gray-700 leading-relaxed italic">
                        "The analytics dashboard gives us real‑time insights into team morale. It's like having a pulse
                        on our entire organization."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&amp;fit=crop&amp;w=150&amp;q=80"
                            alt="Michael Chen" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <div class="font-semibold text-gray-900">Michael Chen</div>
                            <div class="text-sm text-gray-600">CEO</div>
                            <div class="text-sm text-blue-600">StartupFlow</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Emily Rodriguez --}}
            <div class="hover:shadow-lg transition-shadow duration-300 border-0 shadow-md bg-white rounded-xl">
                <div class="p-8 space-y-6">
                    <div class="flex space-x-1">
                        @for ($i = 0; $i < 5; $i++)
                            <flux:icon.star class="w-5 h-5 text-yellow-400 fill-current" />
                        @endfor
                    </div>
                    <p class="text-gray-700 leading-relaxed italic">
                        "The automated surveys and reporting features save us hours every week. The ROI has been
                        incredible from day one."
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&amp;fit=crop&amp;w=150&amp;q=80"
                            alt="Emily Rodriguez" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <div class="font-semibold text-gray-900">Emily Rodriguez</div>
                            <div class="text-sm text-gray-600">Operations Manager</div>
                            <div class="text-sm text-blue-600">Global Solutions Ltd.</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
