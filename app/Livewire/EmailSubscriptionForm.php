<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subscription;
use Illuminate\Support\Str;

class EmailSubscriptionForm extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|unique:subscriptions,email',   // points to new table :contentReference[oaicite:9]{index=9}
    ]; // Livewire uses Laravel’s validator under the hood :contentReference[oaicite:3]{index=3}

    public function submit()
    {
        $data = $this->validate();

        Subscription::create([
            'email' => $data['email'],
            'token' => Str::random(64),
        ]);

        session()->flash('subscribed', 'Thanks! Please check your inbox to confirm.');
        $this->reset('email');
    }


    public function render()
    {
        return view('livewire.email-subscription-form');
    }
}