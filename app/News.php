<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'news';
    
    protected $fillable = [
          'title',
          'img',
          'short_description',
          'is_feature',
          'content'
    ];
    

    public static function boot()
    {
        parent::boot();

        News::observe(new UserActionsObserver);
    }
    
    
    
    
}