<?php

namespace App\Models;
use App\ItemCategories;
use App\ItemLocation;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];

    public function user(){
        return $this->belongsTo('App\models\User');
    }

}
