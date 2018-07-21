<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class UserContact extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'usercontact';
    
    protected $fillable = [
          'name',
          'email',
          'phone',
          'title',
          'content'
    ];
    

    public static function boot()
    {
        parent::boot();

        UserContact::observe(new UserActionsObserver);
    }
    
    
    
    
}