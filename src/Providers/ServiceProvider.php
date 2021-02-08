<?php

namespace Jonnathas\Acl\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

use Jonnathas\Acl\Providers\Traits\RoutesServiceProviderTrait;
use Jonnathas\Acl\Providers\Traits\MiddlewaresServiceProviderTrait;
use Jonnathas\Acl\Providers\Traits\ConfigServiceProviderTrait;
use Jonnathas\Acl\Providers\Traits\TranslationsServiceProviderTrait;
use Jonnathas\Acl\Providers\Traits\AssetsServiceProviderTrait;
use Jonnathas\Acl\Providers\Traits\MigrationsServiceProviderTrait;
use Jonnathas\Acl\Providers\Traits\ControllersServiceProviderTrait;
use Jonnathas\Acl\Providers\Traits\ViewsServiceProviderTrait;
use Jonnathas\Acl\Providers\Traits\HelpersServiceProviderTrait;


class ServiceProvider extends LaravelServiceProvider
{
    use 
        RoutesServiceProviderTrait,
        MiddlewaresServiceProviderTrait,
        ConfigServiceProviderTrait,
        TranslationsServiceProviderTrait,
        AssetsServiceProviderTrait,
        MigrationsServiceProviderTrait,
        ControllersServiceProviderTrait,
        ViewsServiceProviderTrait,
        HelpersServiceProviderTrait;
        

    private $routesPath = 'routes';
    private $app_name = 'laravel-acl-api';
    private $configPath = 'config';
    private $controllersPath = 'Http/Controllers';
    private $migrationsPath = 'database/migrations';
    private $viewPath = 'resources/views';
    private $providers =
        [   
            'Jonnathas\Acl\Providers\AuthorizationServiceProvider',
            'Jonnathas\Acl\Providers\CommandsServiceProvider'
            //'Jonnathas\Acl\Providers\RoutesServiceProvider'
        ];

    public function boot(){
        
    }

    public function register(){

        $this->providersRegister();

        $this->loadRoutesWeb();
        
        $this->loadMiddlewaresAllias(); 

        $this->loadTranslations();

        $this->loadMigrations();

        $this->publishConfig();

        $this->publishAssets();

        $this->publishControllers();

        $this->loadViews();
    }

    public function providersRegister(){
        
        foreach($this->providers as $provider){
            $this->app->register($provider);
        }

    }

    public function packagePath($path){
    
        return __DIR__."/../$path";
    
    }    
}