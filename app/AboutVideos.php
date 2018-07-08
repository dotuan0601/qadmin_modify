<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class AboutVideos extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'aboutvideos';
    
    protected $fillable = [
          'name',
          'img',
          'video_src',
          'knowledgecategory_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        AboutVideos::observe(new UserActionsObserver);
    }
    
    public function knowledgecategory()
    {
        return $this->hasOne('App\KnowledgeCategory', 'id', 'knowledgecategory_id');
    }


    
    
    
}