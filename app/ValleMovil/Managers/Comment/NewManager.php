<?php namespace ValleMovil\Managers\Comment;

use ValleMovil\Managers\BaseManager;

class NewManager extends  BaseManager{

    /**
     * Funcion para obtener las reglas de validacion
     *
     * @return mixed
     */
    public function getRules()
    {
        return [
            'user' => 'required',
            'comment'  => 'required',
            'place_id' => 'required|exists:places,id'
        ];
    }
}