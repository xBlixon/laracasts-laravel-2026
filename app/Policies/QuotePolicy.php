<?php

namespace App\Policies;

use App\Models\Quote;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class QuotePolicy
{
    public function owns(User $user, Quote $quote): bool
    {
        return $user->is($quote->user);
    }
}
