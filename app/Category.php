<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";


    /**
     * One To Many relationship
     * and it means this category has many project
     * and it will return all projects related to this category
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
