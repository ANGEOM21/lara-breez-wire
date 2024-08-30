<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;

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
        // Customize Verify Email ui
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->subject('Verify Email Address')
                ->view(
                    'mail.verify-email',
                    [
                        'url' => $url,
                        'subject' => 'Verify Email Address',
                        'name' => $notifiable->name
                    ]
                );
        });

        // Customize Paswword Reset ui
        ResetPassword::toMailUsing(function (object $notifiable, string $token) {
            return (new MailMessage)
                ->subject('Reset Password')
                ->view(
                    'mail.password-reset',
                    [
                        'url' => URL::temporarySignedRoute(
                            'password.reset',
                            now()->addMinutes(60),
                            ['token' => $token]
                        ),
                        'subject' => 'Reset Password',
                        'name' => $notifiable->name
                    ]
                );
        });

        // Customize component namespace Blade
        Blade::anonymousComponentPath(resource_path('views/livewire/components'), 'components');

    }
}
