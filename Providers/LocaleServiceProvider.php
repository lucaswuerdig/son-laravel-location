<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 11/03/19
 * Time: 20:06
 */

namespace Modules\Location\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Modules\Location\Location;

class LocaleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::middleware(['web'])
            ->group(__DIR__.'/../Routes/web.php');
    }

    public function register()
    {
        $this->app->singleton('Location.location', function($app) {
//            $config = $app['config']->get('pages.home');
            return new Location('pt-br');
        });
    }
}