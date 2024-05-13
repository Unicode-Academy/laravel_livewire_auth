<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class VerifyEmail extends Component
{
    #[Title("Kích hoạt tài khoản")]

    public function render()
    {
        return view('livewire.auth.verify-email');
    }
    public function handleResendEmail()
    {
        Auth::user()->sendEmailVerificationNotification();
    }
}
