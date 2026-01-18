<?php

namespace App\Support;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CurrentUser
{
    public static function id(): ?int
    {
        $authId = Auth::id();
        if ($authId) {
            return $authId;
        }

        $umkmId = User::where('role', 'umkm')->value('id');
        if ($umkmId) {
            return $umkmId;
        }

        return User::value('id');
    }
}
