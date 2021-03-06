<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class AboutCategory extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'aboutcategory';
    
    protected $fillable = [
          'name',
          'slug',
          'status'
    ];
    

    public static function boot()
    {
        parent::boot();

        AboutCategory::observe(new UserActionsObserver);
    }
    
    
    
    
}