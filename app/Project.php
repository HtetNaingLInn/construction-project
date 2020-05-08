<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=[
        'title',
        'description',
        'cat_id',
        'imgs'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'cat_id','id');
    }
}
