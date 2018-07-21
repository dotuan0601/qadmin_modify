<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class ContactInfo extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'contactinfo';
    
    protected $fillable = [
          'company_name',
          'address',
          'first_phone',
          'second_phone',
          'third_phone',
          'email',
          'work_time',
          'work_day'
    ];
    

    public static function boot()
    {
        parent::boot();

        ContactInfo::observe(new UserActionsObserver);
    }
    
    
    
    
}