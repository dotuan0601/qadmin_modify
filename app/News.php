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
          'name',
          'frmenu_id',
          'is_feature',
          'short_description',
          'content',
          'img'
    ];
    

    public static function boot()
    {
        parent::boot();

        News::observe(new UserActionsObserver);
    }
    
    public function frmenu()
    {
        return $this->hasOne('App\FrMenu', 'id', 'frmenu_id');
    }


    
    
    
}