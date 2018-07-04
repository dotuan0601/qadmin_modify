<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class FooterSitemap extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'footersitemap';
    
    protected $fillable = [
          'name',
          'parent_id',
          'is_parent',
          'link'
    ];
    

    public static function boot()
    {
        parent::boot();

        FooterSitemap::observe(new UserActionsObserver);
    }
    
    
    
    
}