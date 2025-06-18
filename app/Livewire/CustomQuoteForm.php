<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CustomQuote;           // ← model
use Illuminate\Support\Facades\Log;   // optional: debug logging

class CustomQuoteForm extends Component
{
    public $company_name   = '';
    public $contact_person = '';
    public $email          = '';
    public $phone          = '';
    public $company_size   = '';
    public $requirements   = '';

    protected $rules = [                         // Livewire uses Laravel validator
        'company_name'   => 'required|min:3',
        'contact_person' => 'required|min:2',
        'email'          => 'required|email',
        'phone'          => 'nullable',
        'company_size'   => 'nullable',
        'requirements'   => 'required|min:5',
    ];                                           // :contentReference[oaicite:2]{index=2}

    public function submit()
    {
        $data = $this->validate();               // returns ONLY safe data

        // Persist to the DB using Eloquent mass‑assignment
        CustomQuote::create($data);              // :contentReference[oaicite:3]{index=3}

        session()->flash('success_quote', 'Request submitted! We’ll contact you soon.');
        $this->reset();                          // clears the inputs
    }

    public function render()
    {
        return view('livewire.custom-quote-form');
    }
}