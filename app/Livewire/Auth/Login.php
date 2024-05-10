<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Title("Đăng nhập")]

    #[Validate('required', message: 'Email bắt buộc phải nhập')]
    #[Validate('email', message: 'Email không đúng định dạng')]
    public $email = "";

    #[Validate('required', message: 'Mật khẩu bắt buộc phải nhập')]
    public $password = "";

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function handleLogin()
    {
        $this->validate();
        //Xử lý login
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        $status = Auth::attempt($credentials);
        if (!$status) {
            session()->flash('msg', 'Email hoặc mật khẩu không chính xác');
            return;
        }

        return $this->redirect('/', true);
    }
}
