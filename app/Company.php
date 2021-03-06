<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'company';
    
    protected $fillable = [
          'name',
          'img'
    ];
    

    public static function boot()
    {
        parent::boot();

        Company::observe(new UserActionsObserver);
    }
    
    
    
    
}