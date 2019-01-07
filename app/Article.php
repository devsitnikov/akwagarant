<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name','slug','title','description','content'];
    public function categories() {
        return $this->belongsToMany('App\Category');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
