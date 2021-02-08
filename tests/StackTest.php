<?php
//use PHPUnit\Framework\TestCase;
use Orchestra\Testbench\TestCase;

use Jonnathas\Acl\Providers\ServiceProvider;

class StackTest extends TestCase
{

    protected $baseUrl = "localhost";

    
     /**
     * A basic test example.
     * @covers
     *
     * @return void
     */
    public function test_a_basic_request()
    {
        $response = $this->get('/acl-api');
        //$response->assertStatus(200);
        $response->assertStatus(200);
        
        
    }
    
    /*
     * 
     * @covers
     * 
     
     public function test_url(){

    	//$response = $this->get('/acl-api');
        //$response->assertStatus(200);        

        $this->assertTrue(true);

    }

    */

    protected function getPackageProviders($app)
    {
        return [ Jonnathas\Acl\Providers\serviceProvider::class ];
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->loadMigrationsFrom(__DIR__ . 'database/migrations');
        $this->artisan('migrate', ['--database' => 'testing'])->run();
    }
    
        
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
        
    }   
}