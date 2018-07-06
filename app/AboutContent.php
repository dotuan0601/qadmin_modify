<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class AboutContent extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'aboutcontent';
    
    protected $fillable = [
          'name',
          'slug',
          'content',
          'status',
          'block_option'
    ];
    

    public static function boot()
    {
        parent::boot();

        AboutContent::observe(new UserActionsObserver);
    }
    
    
    
    
}