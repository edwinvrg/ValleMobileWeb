<?php namespace ValleMovil\Repositories;


abstract class BaseRepo {

    protected $model;

    public  function __construct()
    {
        $this->model = $this->getModel();
    }

    /**
     * Obtiene el model de repositorio
     *
     * @return mixed
     */
    abstract public function getModel();

    /**
     * Busca por el id en el modelo
     * @param $id
     * @param $with
     * @return mixed
     */
    public function find($id, $with = false)
    {
        if(!$with)
            return $this->model->find($id);

        return $this->model->with($with)->where('id','=', $id)->get();
    }

    /**
     * Retornar todos los elementos que contiene el modelo
     * @param $order
     * @param $by
     * @return mixed
     */
    public function all($order = false, $by = 'DESC')
    {
        if($order != false)
            return $this->model->orderBy($order, $by)->get();

        return $this->model->all();
    }

    public function active($with = false)
    {
        if(!$with)
            return $this->model->where('state', '=', 1)->get();

        return $this->model->where('state', '=', 1)->with($with)->get();
    }

    public function where($attr, $equal, $value)
    {
        return $this->model->where($attr, $equal, $value);
    }
} 