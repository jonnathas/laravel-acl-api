<?php

namespace Jonnathas\Acl\Providers\Traits;

trait ViewsServiceProviderTrait
{
    private function loadViews(){

    	if(empty($this->viewPath)){
    		return false;
    	}

        Paginator::defaultView("$this->app_name".'::layouts.pagination.bootstrap-4');

        $this->loadViewsFrom(
            $this->packagePath($this->viewPath),
            $this->app_name);

        $this->publishes([
            $this->packagePath($this->viewPath) => base_path('resources/views/vendor/'.$this->app_name),
        ], "$this->app_name-views");
        
    }
}