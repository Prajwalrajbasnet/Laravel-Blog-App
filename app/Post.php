<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // change table name 
    protected $table ='posts';

    //can change primarykey
    public $primaryKey = 'id';

    //set timestamp
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
