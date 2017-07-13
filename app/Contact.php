<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'phone', 'email'];

    public function scopeName($query, $sName) {
    	if (!empty($sName)) { 
    		$query->where('name', 'like', "%{$sName}%");
    	}
    }

    public function scopeEmail($query, $sEmail) {
    	if (!empty($sEmail)) { 
    		$query->where('email', 'like', "%{$sEmail}%");
    	}
    }
}
