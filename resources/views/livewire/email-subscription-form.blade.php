{{-- Do your work, then step back. --}}
{{-- The Master doesn't talk, he acts. --}}
<div class="flex">
    <form wire:submit.prevent="submit" class="flex ">
        <input type="email" wire:model.lazy="email" placeholder="Enter your email"
            class="px-4 py-2 bg-gray-800 border border-gray-700 rounded-l-lg text-white
               placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 flex-1" />

        <flux:button type="submit" variant="primary"
            class="bg-blue-600 text-white px-6 py-2 rounded-r-lg hover:bg-blue-700 transition-colors">
            Subscribe
        </flux:button>
    </form>

    {{-- real‑time validation feedback --}}
    @error('email')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror

    {{-- flash success message --}}
    @if (session()->has('subscribed'))
        <p class="text-green-600 text-sm mt-2">{{ session('subscribed') }}</p>
    @endif
</div>
