<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'feedback';
    
    protected $fillable = [
          'short_content',
          'content'
    ];
    

    public static function boot()
    {
        parent::boot();

        Feedback::observe(new UserActionsObserver);
    }
    
    
    
    
}