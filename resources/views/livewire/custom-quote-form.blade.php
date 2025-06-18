{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
{{-- Close your eyes. Count to one. That is how long forever feels. --}}
<div class="mx-auto max-w-lg pt-10" id="custom-quote">
    <div class="bg-white border border-blue-200 rounded-xl shadow p-6 text-black">
        <h4 class="text-lg font-semibold text-gray-900 mb-4">
            Request Custom Solution
        </h4>

        <form wire:submit.prevent="submit" class="space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <input wire:model="company_name" placeholder="Company Name"
                    class="border w-full px-3 py-2 rounded-md focus:ring-2 focus:ring-blue-500" />
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <input wire:model="contact_person" placeholder="Contact Person"
                    class="border w-full px-3 py-2 rounded-md focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <input wire:model="email" type="email" placeholder="Email"
                    class="border w-full px-3 py-2 rounded-md focus:ring-2 focus:ring-blue-500" />
                <input wire:model="phone" placeholder="Phone"
                    class="border w-full px-3 py-2 rounded-md focus:ring-2 focus:ring-blue-500" />
            </div>

            <input wire:model="company_size" placeholder="Company Size"
                class="border w-full px-3 py-2 rounded-md focus:ring-2 focus:ring-blue-500" />

            <textarea wire:model="requirements" rows="3" placeholder="Requirements"
                class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 resize-none"></textarea>

            {{-- validation errors --}}
            @error('company_name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            @error('contact_person')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror

            <flux:button type="submit" variant="primary" class="w-full bg-blue-600 hover:bg-blue-700 text-white">
                Request Custom Quote
            </flux:button>
        </form>

        @if (session()->has('success_quote'))
            <p class="text-green-600 text-sm mt-2">{{ session('success_quote') }}</p>
        @endif
    </div>
</div>
