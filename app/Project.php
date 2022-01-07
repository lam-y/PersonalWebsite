<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";

    protected $fillable = ['id', 'name', 'icon', 'description', 'images', 'created_at', 'updated_at'];


     /**
     * One To Many relationship
     * it means that this project related to or belongs to one category
     * and it will retrieve the category of this project
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }



}
