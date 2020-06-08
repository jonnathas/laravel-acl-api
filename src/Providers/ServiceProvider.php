<?php

namespace Jonnathas\Acl\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;


class ServiceProvider extends LaravelServiceProvider
{
    

    protected $providers =
        [   
            'Jonnathas\Acl\Providers\AuthorizationServiceProvider',
            'Jonnathas\Acl\Providers\ServiceProvider',
            'Jonnathas\Acl\Providers\CommandsServiceProvider',
        ];

    public function register(){

        $this->providersRegister();
    
    }

    public function providersRegister(){
        
        foreach($this->providers as $provider){
            $this->app->register($provider);
        }

    }

    public function boot(){

    }

    public function packagePath($path){
    
        return __DIR__."/../../$path";
    
    }
}