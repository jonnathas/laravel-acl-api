<?php

namespace Jonnathas\Acl\Providers\Traits;

trait MigrationsServiceProviderTrait
{
    private function loadMigrations(){
        
    	if(empty($this->migratePath)){
    		return false;
    	}

        $migrationsPath = $this->packagePath($this->migratePath);

        $this->loadMigrationsFrom($migrationsPath, $this->app_name);

        $this->publishes([
            $migrationsPath => base_path('database/migrations'),
        ], "$this->app_name-migrations");
    }
}