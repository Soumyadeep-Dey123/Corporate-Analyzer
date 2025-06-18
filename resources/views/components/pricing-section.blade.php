<!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
<!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
<section id="pricing" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Simple, Transparent Pricing
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Choose the perfect plan for your organization. All plans include our core features with no hidden fees.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

            {{-- Starter --}}
            <div class="relative hover:shadow-xl transition-shadow duration-300 shadow-md bg-white rounded-xl">
                <div class="px-6 py-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900">Starter</h3>
                    <p class="text-gray-600 mt-2">Perfect for small teams getting started</p>
                    <div class="mt-6">
                        <span class="text-4xl font-bold text-gray-900">$0</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                </div>

                <div class="space-y-6 px-6 pb-8">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <flux:icon.check class="w-5 h-5 text-green-600 mr-3 flex-shrink-0" />
                            <span class="text-gray-700">Up to 50 responses</span>
                        </li>
                        <li class="flex items-center">
                            <flux:icon.check class="w-5 h-5 text-green-600 mr-3 flex-shrink-0" />
                            <span class="text-gray-700">Basic templates</span>
                        </li>
                        <li class="flex items-center">
                            <flux:icon.check class="w-5 h-5 text-green-600 mr-3 flex-shrink-0" />
                            <span class="text-gray-700">Email support</span>
                        </li>
                    </ul>

                    <flux:button variant="outline" class="w-full mt-6">
                        Start Free Trial
                    </flux:button>
                </div>
            </div>

            {{-- Professional (Most‑Popular) --}}
            <div
                class="relative hover:shadow-xl transition-shadow duration-300 ring-2 ring-blue-600 shadow-lg bg-white rounded-xl">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <div class="bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-semibold flex items-center">
                        <flux:icon.star class="w-4 h-4 mr-1" />
                        Most Popular
                    </div>
                </div>

                <div class="px-6 py-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900">Professional</h3>
                    <p class="text-gray-600 mt-2">Best for growing teams and organizations</p>
                    <div class="mt-6">
                        <span class="text-4xl font-bold text-gray-900">$19</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                </div>

                <div class="space-y-6 px-6 pb-8">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <flux:icon.check class="w-5 h-5 text-green-600 mr-3 flex-shrink-0" />
                            <span class="text-gray-700">Unlimited responses</span>
                        </li>
                        <li class="flex items-center">
                            <flux:icon.check class="w-5 h-5 text-green-600 mr-3 flex-shrink-0" />
                            <span class="text-gray-700">Advanced analytics</span>
                        </li>
                        <li class="flex items-center">
                            <flux:icon.check class="w-5 h-5 text-green-600 mr-3 flex-shrink-0" />
                            <span class="text-gray-700">Custom branding</span>
                        </li>
                        <li class="flex items-center">
                            <flux:icon.check class="w-5 h-5 text-green-600 mr-3 flex-shrink-0" />
                            <span class="text-gray-700">Priority support</span>
                        </li>
                    </ul>

                    <flux:button variant="primary" class="w-full mt-6 bg-blue-600 hover:bg-blue-700 text-white">
                        Start Free Trial
                    </flux:button>
                </div>
            </div>

            {{-- Enterprise --}}
            <div class="relative hover:shadow-xl transition-shadow duration-300 shadow-md bg-white rounded-xl">
                <div class="px-6 py-8 text-center">
                    <h3 class="text-2xl font-bold text-gray-900">Enterprise</h3>
                    <p class="text-gray-600 mt-2">Advanced features for large organizations</p>
                    <div class="mt-6">
                        <span class="text-4xl font-bold text-gray-900">$29</span>
                        <span class="text-gray-600">/month</span>
                    </div>
                </div>

                <div class="space-y-6 px-6 pb-8">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <flux:icon.check class="w-5 h-5 text-green-600 mr-3 flex-shrink-0" />
                            <span class="text-gray-700">Everything in Professional</span>
                        </li>
                        <li class="flex items-center">
                            <flux:icon.check class="w-5 h-5 text-green-600 mr-3 flex-shrink-0" />
                            <span class="text-gray-700">Advanced integrations</span>
                        </li>
                        <li class="flex items-center">
                            <flux:icon.check class="w-5 h-5 text-green-600 mr-3 flex-shrink-0" />
                            <span class="text-gray-700">Dedicated support</span>
                        </li>
                        <li class="flex items-center">
                            <flux:icon.check class="w-5 h-5 text-green-600 mr-3 flex-shrink-0" />
                            <span class="text-gray-700">Custom training</span>
                        </li>
                    </ul>

                    <flux:button variant="outline" class="w-full mt-6">
                        Contact Sales
                    </flux:button>
                </div>
            </div>
        </div>
        {{-- <!-- Custom solution request card --> --}}
        @livewire('custom-quote-form')
    </div>
</section>
