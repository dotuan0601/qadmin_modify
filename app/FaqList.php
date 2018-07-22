<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class FaqList extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'faqlist';
    
    protected $fillable = [
          'question',
          'answer',
          'is_home_page'
    ];
    

    public static function boot()
    {
        parent::boot();

        FaqList::observe(new UserActionsObserver);
    }
    
    
    
    
}