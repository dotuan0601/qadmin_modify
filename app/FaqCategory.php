<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class FaqCategory extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'faqcategory';
    
    protected $fillable = [
          'name',
          'is_active'
    ];
    

    public static function boot()
    {
        parent::boot();

        FaqCategory::observe(new UserActionsObserver);
    }
    
    
    
    
}