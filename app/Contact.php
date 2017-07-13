<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Filterable;

class Contact extends Model
{
    use Filterable;
    
    protected $fillable = ['name', 'phone', 'email'];
}
