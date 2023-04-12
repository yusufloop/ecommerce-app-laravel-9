<?php

namespace App\Providers;


use App\Models\Setting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() //register Setting as Facade
    {
        $this->app->bind('setting', function($app) {
            return new Setting();
        });

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Setting', Setting::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // only use the Settings package if the Settings table is present in the database
        if(!\app()->runningInConsole() && count(Schema::getColumnListing('settings'))){
            $setting = Setting::all();
            foreach($setting as $key => $setting){
                Config::set('settings.' .$setting->key, $setting->value);
            }
        }
    }
}
