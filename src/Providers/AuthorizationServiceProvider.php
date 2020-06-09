<?php

namespace Jonnathas\Acl\Providers;

use Jonnathas\Acl\Database\Models\Privelege;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
    
use Illuminate\Http\Request;

use Closure;
use Illuminate\Contracts\Auth\Factory as AuthFactory;


class AuthorizationServiceProvider extends AuthServiceProvider
{   
    public function register(){

    }
    public function boot(){
    	
        if(Schema::hasTable('priveleges')){

        	foreach ($this->priveleges() as $privelege) {
    	    		
    	        Gate::define($privelege['name'], function($user) use ($privelege){

    	        	return $user->hasPrivelege($privelege['name']);
    	        });
        	}
        }
    }

    function priveleges(){
        return Privelege::get();
    }
}