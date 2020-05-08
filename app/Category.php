<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=[
        'name',
        'description'
    ];

    public function project()
    {
        return $this->hasMany('App\Project', 'cat_id', 'id');
    }
}
