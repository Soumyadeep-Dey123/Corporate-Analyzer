<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\RedirectResponse;

class ConfirmSubscriptionController
{
    /**
     * Mark a subscription as verified when the user clicks the e‑mail link.
     *
     * @param  string  $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(string $token): RedirectResponse
    {
        // Look up by token or show 404 if not found
        $subscription = Subscription::where('token', $token)->firstOrFail();  // 404 on bad token

        // If it isn’t verified yet, set the timestamp
        if (is_null($subscription->verified_at)) {
            $subscription->update(['verified_at' => now()]);
        }

        return redirect('/')
            ->with('message', 'Your e‑mail address is now confirmed. 🎉');
    }
}