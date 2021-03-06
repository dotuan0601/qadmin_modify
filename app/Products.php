<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'products';
    
    protected $fillable = [
          'name',
          'img',
          'short_description',
          'frmenu_id',
          'productcategory_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        Products::observe(new UserActionsObserver);
    }
    
    public function frmenu()
    {
        return $this->hasOne('App\FrMenu', 'id', 'frmenu_id');
    }


    public function productcategory()
    {
        return $this->hasOne('App\ProductCategory', 'id', 'productcategory_id');
    }


    
    
    
}