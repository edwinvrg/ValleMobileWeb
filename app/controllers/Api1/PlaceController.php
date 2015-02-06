<?php namespace Api1;

use ValleMovil\Repositories\PlacesRepo;

class PlaceController extends \BaseController {

    protected $placesRepo;

    public function __construct(PlacesRepo $placesRepo)
    {
        $this->placesRepo = $placesRepo;
    }
	/**
	 * Display a listing of the resource.
	 * GET /places
	 *
	 * @return Response
	 */
	public function index()
	{
        return \Response::json($this->placesRepo->active(['comments', 'categorys', 'images']));
	}


	/**
	 * Display the specified resource.
	 * GET /places/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return \Response::json($this->placesRepo->find($id, ['comments', 'categorys', 'images']));
	}


	/**
	 * Update the specified resource in storage.
	 * PUT /places/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $place = $this->placesRepo->find($id);
        $data = \Input::all();

        if($data['state'] == 0)
            $place->points -= 1;
        else
            $place->points += 1;

        $place->save();

        return \Response::json($place, 200);
	}

}
