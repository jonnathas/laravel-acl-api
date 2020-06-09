<?php

namespace Jonnathas\Acl\Providers\Traits;

trait AssetsServiceProviderTrait
{
    
    private function publishAssets(){

    	if(empty($this->assetsPath)){
    		return false;
    	}
    	
        $this->publishes([
            $this->packagePath($this->assetsPath) => public_path('vendor/'.$this->app_name),
        ], "$this->app_name-assets");
    }

}