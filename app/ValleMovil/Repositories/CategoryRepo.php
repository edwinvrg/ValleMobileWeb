<?php namespace ValleMovil\Repositories;

use ValleMovil\Entities\Category;

class CategoryRepo extends BaseRepo{

    /**
     * Obtiene el model de repositorio
     *
     * @return mixed
     */
    public function getModel()
    {
        return new Category();
    }
}