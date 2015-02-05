<?php namespace ValleMovil\Entities;


class Comment extends \Eloquent{

    protected $fillable = ['user', 'comment', 'place_id'];
    public function place(){

        return $this->hasOne('ValleMovil\Entities\place', 'id','place_id');

    }
} 