<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class AboutArchive extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'aboutarchive';
    
    protected $fillable = [
          'name',
          'img'
    ];
    

    public static function boot()
    {
        parent::boot();

        AboutArchive::observe(new UserActionsObserver);
    }
    
    
    
    
}