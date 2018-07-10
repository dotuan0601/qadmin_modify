<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetail extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'productdetail';
    
    protected $fillable = [
          'products_id',
          'ingredient',
          'main_part',
          'instruction'
    ];
    

    public static function boot()
    {
        parent::boot();

        ProductDetail::observe(new UserActionsObserver);
    }
    
    public function products()
    {
        return $this->hasOne('App\Products', 'id', 'products_id');
    }


    
    
    
}