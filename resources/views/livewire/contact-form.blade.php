{{-- The best athlete wants his opponent at his best. --}}
{{-- Stop trying to control. --}}
<div class="bg-white rounded-xl shadow-lg text-black">
    <div class="p-8 space-y-6">
        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Send us a Message</h3>
        <form wire:submit.prevent="submit" class="space-y-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <input wire:model="first_name" placeholder="First Name"
                    class="border w-full px-3 py-2 rounded-md focus:ring-2 focus:ring-blue-500" />
                <input wire:model="last_name" placeholder="Last Name"
                    class="border w-full px-3 py-2 rounded-md focus:ring-2 focus:ring-blue-500" />
            </div>
            <input wire:model="email" type="email" placeholder="Email"
                class="border w-full px-3 py-2 rounded-md focus:ring-2 focus:ring-blue-500" />
            <input wire:model="company" placeholder="Company"
                class="border w-full px-3 py-2 rounded-md focus:ring-2 focus:ring-blue-500" />
            <textarea wire:model="message" rows="4" placeholder="Message"
                class="w-full px-3 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 resize-none"></textarea>

            @error('first_name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            {{-- repeat for last_name, email, message, etc. --}}

            <flux:button type="submit" variant="primary" class="w-full bg-blue-600 hover:bg-blue-700 text-white">
                Send Message
            </flux:button>
        </form>
        {{-- ✅ success notice --}}
        @if (session()->has('success_contact'))
            <p class="text-green-600 text-sm mt-4">
                {{ session('success_contact') }}
            </p>
        @endif
    </div>
</div>
