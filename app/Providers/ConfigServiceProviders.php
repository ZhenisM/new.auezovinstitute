<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        config([
            'laravellocalization.supportedLocales' => [
                'kk'  => array( 'name' => 'kk', 'name2' => 'Казақша', 'script' => 'Cyrl', 'native' => 'kk' ),
                'ru'  => array( 'name' => 'ru', 'name2' => 'Русский', 'script' => 'Cyrl', 'native' => 'ru' ),
                'en'  => array( 'name' => 'en', 'name2' => 'English', 'script' => 'Latn', 'native' => 'English' ),
            ],

            'laravellocalization.useAcceptLanguageHeader' => true,

            'laravellocalization.hideDefaultLocaleInURL' => false


        ]);
    }
}
