<?php

namespace App\Providers;

use Collective\Html\Componentable;
use Collective\Html\FormBuilder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Traits\Macroable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /** @see Macroable */
        FormBuilder::macro('tekmi', function () {
            return '<input type="text" value="tekmi">';
        });

        /** @see Componentable */
        FormBuilder::component('bsTekmi', 'components.form.text', ['name', 'value' => null, 'attributes' => []]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
