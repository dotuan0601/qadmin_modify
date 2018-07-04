<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class ImageAct extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'imageact';
    
    protected $fillable = [
          'img_small',
          'img_large',
          'img_title',
          'is_feature'
    ];
    

    public static function boot()
    {
        parent::boot();

        ImageAct::observe(new UserActionsObserver);
    }
    
    
    
    
}