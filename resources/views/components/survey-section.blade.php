<!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<section class="py-20 relative overflow-hidden">
    {{-- Decorative blobs --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-indigo-200/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-200/20 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Badge --}}
        <div class="text-center mb-16">
            <span
                class="inline-flex items-center space-x-2 bg-white/80 backdrop-blur-sm rounded-full px-4 py-2 border border-indigo-200/50 shadow-lg mb-6">
                <flux:icon.sparkles class="w-4 h-4 text-indigo-600" />
                <span class="text-sm font-medium text-slate-700">Your Voice Matters</span>
            </span>

            {{-- Heading --}}
            <h1 class="text-4xl lg:text-6xl font-bold text-slate-900 mb-6">
                Employee Engagement
                <span class="bg-gradient-to-r from-indigo-600 via-indigo-600 to-blue-600 bg-clip-text text-transparent">
                    Survey
                </span>
            </h1>

            {{-- Sub‑heading --}}
            <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                Help us understand your workplace experience and contribute to building a better organizational
                culture. Your feedback drives meaningful change.
            </p>

            {{-- Stats --}}
            <div class="flex justify-center space-x-8 mt-12">
                <div class="text-center">
                    <div
                        class="flex items-center justify-center w-12 h-12 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl mb-2 mx-auto">
                        <flux:icon.user-group class="w-6 h-6 text-white" />
                    </div>
                    <div class="text-2xl font-bold text-slate-900">10K+</div>
                    <div class="text-sm text-slate-600">Responses</div>
                </div>

                <div class="text-center">
                    <div
                        class="flex items-center justify-center w-12 h-12 bg-gradient-to-r from-emerald-500 to-green-500 rounded-xl mb-2 mx-auto">
                        <flux:icon.chart-bar class="w-6 h-6 text-white" />
                    </div>
                    <div class="text-2xl font-bold text-slate-900">98%</div>
                    <div class="text-sm text-slate-600">Satisfaction</div>
                </div>

                <div class="text-center">
                    <div
                        class="flex items-center justify-center w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl mb-2 mx-auto">
                        <flux:icon.sparkles class="w-6 h-6 text-white" />
                    </div>
                    <div class="text-2xl font-bold text-slate-900">5&nbsp;min</div>
                    <div class="text-sm text-slate-600">Average Time</div>
                </div>
            </div>
        </div>

        {{-- Survey form placeholder (replace with Livewire or static Blade form) --}}
        @livewire('survey-form')

    </div>
</section>
