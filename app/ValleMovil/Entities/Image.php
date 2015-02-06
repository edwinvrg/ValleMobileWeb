<?php namespace ValleMovil\Entities;


class Image extends \Eloquent{

    public function place(){

        return $this->hasOne('ValleMovil\Entities\Place', 'id','place_id');

    }
} 