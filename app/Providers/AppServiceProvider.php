<?php

namespace App\Providers;

use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
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
        VerifyEmail::$toMailCallback = function($notifiable, $verificationUrl) {
            return (new MailMessage)
                ->subject(Lang::get('Email de verificación'))
                ->greeting(Lang::get("Hola ") . $notifiable->name)
                ->line(Lang::get('Por favor, presiona el botón que aparece aquí debajo.'))
                ->action(Lang::get('Verificar ahora'), $verificationUrl)
                ->line(Lang::get('Si no has creado una cuenta, no necesitas hacer nada.'))
                ->salutation(new HtmlString(
                    Lang::get("Buen día.").'<br>' .'<strong>'. Lang::get("TechXpress") . '</strong>'
                ));
        };
    }
}
