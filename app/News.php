<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['short_text','text','category','author','img','date','date_timestamp','created_at'];

    public function category(){
        $this->belongsTo('App\Category');
    }

}
