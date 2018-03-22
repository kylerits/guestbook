<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    /**
     * Field to be mass-assigned.
     * 
     * @var array
     * 
     */
    
     protected $fillable = ['name', 'email', 'body', 'flagged_at'];
}
