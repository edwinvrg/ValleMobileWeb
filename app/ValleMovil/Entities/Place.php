<?php namespace ValleMovil\Entities;


class Place extends \Eloquent{

    protected $fillable = ['points'];

    public function categorys()
    {
        return $this->belongsToMany('ValleMovil\Entities\Category', 'place_category', 'place_id', 'category_id')->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany('ValleMovil\Entities\Comment');
    }

    public function images()
    {
        return $this->hasMany('ValleMovil\Entities\Image');
    }
} 