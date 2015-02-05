<?php namespace ValleMovil\Repositories;

use ValleMovil\Entities\Place;

class PlacesRepo extends BaseRepo{

    /**
     * Obtiene el model de repositorio
     *
     * @return mixed
     */
    public function getModel()
    {
        return new Place();
    }

} 