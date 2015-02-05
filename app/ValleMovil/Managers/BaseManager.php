<?php namespace ValleMovil\Managers;


abstract class BaseManager {

    protected $entity;
    protected $data;

    public function __construct($entity, $data=null)
    {
        $this->entity = $entity;
        if(!is_null($data))
        {
            $this->data = array_only($data, array_keys($this->getRules()));
        }
    }

    /**
     * Funcion para obtener las reglas de validacion
     *
     * @return mixed
     */
    abstract public function getRules();

    /**
     * Funcion que valida el formulario
     *
     * @throws ValidationException
     */
    public function isValid()
    {
        $rules = $this->getRules();

        $validation = \Validator::make($this->data, $rules);
        if($validation->fails())
        {
            throw new ValidationException('Error en la validacion', $validation->messages());
        }
    }

    /**
     * Funcion para praparar los datos a guardar
     * @param $data
     * @return mixed
     */
    public function prepareData($data)
    {
        return $data;
    }

    /**
     * Funcion para guardar los datos en la base de datos
     *
     * @return bool
     * @throws ValidationException
     */
    public function save()
    {
        $this->isValid();

        $this->entity->fill($this->prepareData($this->data));
        return $this->entity->save();
    }


    /**
     * Funcion para borrar una entidad
     *
     * @return mixed
     */
    public function delete()
    {
        return $this->entity->delete();
    }
}