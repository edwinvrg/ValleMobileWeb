<?php namespace Api1;

use ValleMovil\Repositories\ImageRepo;

class ImageController extends \BaseController {

    protected $imageRepo;

    public function __construct(ImageRepo $imageRepo)
    {
        $this->imageRepo = $imageRepo;
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
        return \Response::json($this->imageRepo->find($id));
	}
}
