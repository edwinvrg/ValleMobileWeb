<?php namespace ValleMovil\Repositories;

use ValleMovil\Entities\Image;

class ImageRepo extends BaseRepo{
    /**
     * Obtiene el model de repositorio
     *
     * @return mixed
     */
    public function getModel()
    {
        return new Image();
    }

} 