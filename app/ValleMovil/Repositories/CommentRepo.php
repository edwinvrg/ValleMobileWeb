<?php namespace ValleMovil\Repositories;

use ValleMovil\Entities\Comment;

class CommentRepo extends BaseRepo{

    /**
     * Obtiene el model de repositorio
     *
     * @return mixed
     */
    public function getModel()
    {
        return new Comment();
    }
}