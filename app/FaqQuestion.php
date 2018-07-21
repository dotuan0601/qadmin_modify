<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class FaqQuestion extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'faqquestion';
    
    protected $fillable = [
          'name',
          'email',
          'faqcategory_id',
          'content'
    ];
    

    public static function boot()
    {
        parent::boot();

        FaqQuestion::observe(new UserActionsObserver);
    }
    
    public function faqcategory()
    {
        return $this->hasOne('App\FaqCategory', 'id', 'faqcategory_id');
    }


    
    
    
}