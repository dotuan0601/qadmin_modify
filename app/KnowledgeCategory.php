<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class KnowledgeCategory extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'knowledgecategory';
    
    protected $fillable = [
          'name',
          'status'
    ];
    

    public static function boot()
    {
        parent::boot();

        KnowledgeCategory::observe(new UserActionsObserver);
    }
    
    
    
    
}