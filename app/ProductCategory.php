<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'productcategory';
    
    protected $fillable = [
          'name',
          'img',
          'is_home_page',
          'status',
          'frmenu_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        ProductCategory::observe(new UserActionsObserver);
    }
    
    public function frmenu()
    {
        return $this->hasOne('App\FrMenu', 'id', 'frmenu_id');
    }


    
    
    
}