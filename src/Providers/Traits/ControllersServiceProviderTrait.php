<?php

namespace Jonnathas\Acl\Providers\Traits;

trait ControllersServiceProviderTrait
{
    private function publishControllers(){
        
    	if(empty($this->controllersPath)){
    		return false;
    	}

        $controllersPath = $this->packagePath($this->controllersPath);
        
        $this->publishes([
            $controllersPath => base_path('App\Http\Controllers'),
        ], "$this->app_name-controllers");
    }
}