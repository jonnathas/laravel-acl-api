<?php
use PHPUnit\Framework\TestCase;
use Jonnathas\Acl\Providers\ServiceProvider;


class StackTest extends TestCase
{
    public function testCreate(){

        $appMock = $this->createMock('\Illuminate\Contracts\Foundation\Application');
        $provider = new Jonnathas\Acl\Providers\ServiceProvider($appMock);

        $this->assertClassHasAttribute('providers',Jonnathas\Acl\Providers\ServiceProvider::Class);
    }
}