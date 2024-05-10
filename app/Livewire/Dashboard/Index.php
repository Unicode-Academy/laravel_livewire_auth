<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboard.index');
    }

    public function handleLogout()
    {
        Auth::logout();
        return $this->redirect('/auth/login', true);
    }
}
