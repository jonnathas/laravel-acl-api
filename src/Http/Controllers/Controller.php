<?php

namespace Jonnathas\Acl\Http\Controllers;

use Jonnathas\Acl\Models\Role;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
   // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
		
        dd('TESTE');

		return print("olá mundo!!");
    	
    	//$role = Role::create(
    	//	['name' => 'name_role', 
    	//	'description' => 'description']);

    	
		
    	//dd($role);
    }
}
