<?php

namespace Khatriafaz;

use Illuminate\Support\ServiceProvider;
use App;

class EnsureProductionServiceProvider extends ServiceProvider
{
	/**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
	        __DIR__.'/../config.php', 'ensureproduction'
	    );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    	$this->publishesConfig();

        $this->ensureApplicationOnProduction();        
    }

    public function publishesConfig()
    {
    	$this->publishes([
	        __DIR__.'/../config.php' => config_path('ensureproduction.php'),
	    ]);
    }

    public function ensureApplicationOnProduction()
    {
        if (! App::runningInConsole()) {
            $domains = config('ensureproduction.domains', []);

            $host = request()->getHttpHost();

            if (in_array($host, $domains)) {
                config([
                    'app.env' => 'production',
                    'app.debug' => false
                ]);

                
	            if ($overrideConfig = config('ensureproduction.override_config')) {
	            	foreach ($overrideConfig as $key => $value) {
	            		config([
		                    $key => $value
		                ]);
	            	}
	            }
            }

        }
    }
}