<!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
<!-- We must ship. - Taylor Otwell -->
<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-4 gap-8">
            <div class="lg:col-span-2">
                <div class="text-2xl font-bold mb-4">Corporate Analyzer</div>
                <p class="text-gray-400 mb-6 max-w-md">
                    Empowering organizations worldwide with cutting-edge survey and analytics tools.
                    Transform your workplace culture with data-driven insights.
                </p>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Company</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Careers</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Press</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Resources</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Documentation</a>
                    </li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Help Center</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
                    </li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 mb-4 md:mb-0">
                    © {{ now()->year }} Corporate Analyzer. All rights reserved.
                </div>

                <div class="flex items-center space-x-4">
                    <span class="text-gray-400">Stay updated:</span>

                    @livewire('email-subscription-form')
                    {{-- real‑time validation feedback --}}
                </div>
            </div>
        </div>
    </div>
</footer>
