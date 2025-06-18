<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\RedirectResponse;

class UnsubscribeController
{
    /**
     * Delete (or soft‑delete) the subscription tied to the unsubscribe token.
     *
     * @param  string  $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(string $token): RedirectResponse
    {
        $subscription = Subscription::where('token', $token)->firstOrFail();

        // Hard‑delete; swap for soft‑delete if you added SoftDeletes trait
        $subscription->delete();

        return redirect('/')
            ->with('message', 'You have been unsubscribed. Sorry to see you go! 📨');
    }
}