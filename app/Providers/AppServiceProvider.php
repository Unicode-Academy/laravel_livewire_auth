<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ResetPassword::toMailUsing(function (object $notifiable, string $token) {
            $url = url(route('password.reset', [
                'token' => $token,
                'email' => $notifiable->getEmailForPasswordReset(),
            ], false));
            return (new MailMessage)
                ->subject('[Unicode Academy] - Yêu cầu đặt lại mật khẩu')
                ->line('Chúng tôi nhận được yêu cầu đặt lại mật khẩu của bạn. Vui lòng click vào link bên dưới')
                ->action('Đặt lại mật khẩu', $url);
        });
    }
}
