<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg text-black">
    @if (session()->has('message'))
        <div class="mb-4 text-green-600 font-semibold">{{ session('message') }}</div>
    @endif

    <h2 class="text-xl font-bold mb-6">
        {{ ['Personal Info', 'Work Experience', 'Engagement', 'Feedback'][$currentStep] }}
    </h2>

    <form wire:submit.prevent="submit">
        {{-- Step 0 --}}
        @if ($currentStep === 0)
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm">Full Name *</label>
                    <input type="text" wire:model.defer="formData.name" class="w-full border p-2 rounded" required>
                    @error('formData.name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm">Email *</label>
                    <input type="email" wire:model.defer="formData.email" class="w-full border p-2 rounded" required>
                    @error('formData.email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm">Department</label>
                    <select wire:model.defer="formData.department" class="w-full border p-2 rounded">
                        <option value="">Select Department</option>
                        @foreach (['hr', 'engineering', 'marketing', 'sales', 'finance', 'operations', 'other'] as $dept)
                            <option value="{{ $dept }}">{{ ucfirst($dept) }}</option>
                        @endforeach
                    </select>
                    @error('formData.department')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm">Position</label>
                    <input type="text" wire:model.defer="formData.position" class="w-full border p-2 rounded">
                    @error('formData.position')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        @elseif ($currentStep === 1)
            <div>
                <label class="block text-sm">Years of Experience</label>
                <select wire:model.defer="formData.workExperience" class="w-full border p-2 rounded">
                    @foreach (['less-than-1', '1-2', '3-5', '6-10', 'more-than-10'] as $exp)
                        <option value="{{ $exp }}">{{ str_replace('-', ' ', ucfirst($exp)) }}</option>
                    @endforeach
                </select>
                @error('formData.workExperience')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        @elseif ($currentStep === 2)
            <div class="space-y-4">
                @foreach ([
        'engagement' => 'How engaged do you feel at work?',
        'satisfaction' => 'How satisfied are you with your current role?',
        'workLifeBalance' => 'Rate your work‑life balance',
        'communication' => 'Team communication effectiveness',
        'leadership' => 'Leadership quality',
        'growth' => 'Growth opportunities',
    ] as $field => $label)
                    <div>
                        <label class="block text-sm">{{ $label }}</label>
                        <div class="flex space-x-1">
                            @for ($i = 1; $i <= 5; $i++)
                                <button type="button"
                                    wire:click="setRating('{{ $field }}', {{ $i }})"
                                    class="text-2xl focus:outline-none
                                           {{ $i <= $formData[$field] ? 'text-yellow-400' : 'text-gray-300' }}"
                                    aria-label="{{ $label }} – rate {{ $i }}">
                                    ★
                                </button>
                            @endfor
                        </div>
                    </div>
                @endforeach
            </div>
        @elseif ($currentStep === 3)
            <div class="space-y-4">
                <div>
                    <label class="block text-sm">What do you enjoy most?</label>
                    <textarea wire:model.defer="formData.feedback" rows="3" class="w-full border p-2 rounded"></textarea>
                    @error('formData.feedback')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm">What improvements would you suggest?</label>
                    <textarea wire:model.defer="formData.improvements" rows="3" class="w-full border p-2 rounded"></textarea>
                    @error('formData.improvements')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm">How likely are you to recommend us?</label>
                    <div class="flex space-x-1">
                        @for ($i = 1; $i <= 5; $i++)
                            <button type="button" wire:click="setRating('recommend', {{ $i }})"
                                class="text-2xl focus:outline-none
                                       {{ $i <= $formData['recommend'] ? 'text-yellow-400' : 'text-gray-300' }}"
                                aria-label="Recommend – rate {{ $i }}">
                                ★
                            </button>
                        @endfor
                    </div>
                </div>
            </div>
        @endif

        {{-- Buttons --}}
        <div class="flex justify-between mt-6">
            <button type="button" wire:click="previousStep" class="px-4 py-2 bg-gray-200 rounded"
                @disabled($currentStep === 0)>Previous</button>

            @if ($currentStep < 3)
                <button type="button" wire:click="nextStep"
                    class="px-4 py-2 bg-indigo-600 text-white rounded">Next</button>
            @else
                <button type="submit" class="px-6 py-2 bg-green-600 text-white rounded">Submit</button>
            @endif
        </div>
    </form>
</div>
