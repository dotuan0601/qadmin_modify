<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class PriceShow extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'priceshow';
    
    protected $fillable = ['price_show_content'];
    

    public static function boot()
    {
        parent::boot();

        PriceShow::observe(new UserActionsObserver);
    }
    
    
    
    
}