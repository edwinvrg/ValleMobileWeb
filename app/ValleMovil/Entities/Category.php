<?php namespace ValleMovil\Entities;


class Category extends \Eloquent{

    protected $table = 'categorys';

    public function places()
    {
        return $this->belongsToMany('ValleMovil\Entities\Place', 'place_category', 'category_id', 'place_id')->withTimestamps();
    }
} 