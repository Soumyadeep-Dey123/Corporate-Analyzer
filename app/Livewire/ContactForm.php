<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\contacts;
use Illuminate\Support\Str;

class ContactForm extends Component
{
    public $first_name = '';
    public $last_name  = '';
    public $email      = '';
    public $company    = '';
    public $phone      = '';
    public $message    = '';

    protected $rules = [                                    // Livewire uses Laravel validator
        'first_name' => 'required|min:2',
        'last_name'  => 'required|min:2',
        'email'      => 'required|email',
        'company'    => 'nullable',
        'phone'      => 'nullable',
        'message'    => 'required|min:5',
    ];                                                      // :contentReference[oaicite:4]{index=4}

    public function submit()
    {
        $data = $this->validate();                          // returns only validated fields :contentReference[oaicite:5]{index=5}

        contacts::create([
            'name'         => $data['first_name'].' '.$data['last_name'],
            'email'        => $data['email'],
            'phone'        => $data['phone'],
            'company_name' => $data['company'],
            'message'      => $data['message'],
        ]);                                                 // mass‑assignment guarded by $fillable :contentReference[oaicite:6]{index=6}

        session()->flash('success_contact', 'Thank you! We\'ll reply shortly.'); // flash message :contentReference[oaicite:7]{index=7}
        $this->reset();                                     // clears inputs :contentReference[oaicite:8]{index=8}
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}