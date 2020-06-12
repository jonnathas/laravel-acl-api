<?php

namespace Jonnathas\Acl\Models;



use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'id'
    ];

    protected $hidden = [
       	
    ];

    public function roles(){
        $this->belongsToMany('Jonnathas\Acl\Models\Role');
    }
}
