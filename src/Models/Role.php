<?php

namespace Jonnathas\Acl\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
       'description','name','id'
    ];

    protected $hidden = [
    ];

    public function users(){
        //$this->belongsToMany();
    }

    public function privileges(){

    }
}
