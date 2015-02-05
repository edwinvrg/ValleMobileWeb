<?php namespace Api1;

use ValleMovil\Repositories\CategoryRepo;

class CategoryController extends \BaseController {

    protected $categoryRepo;

    public function __construct(CategoryRepo $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

	/**
	 * Display a listing of the resource.
	 * GET /category
	 *
	 * @return Response
	 */
	public function index()
	{
		return \Response::json($this->categoryRepo->active('places'));
	}

	/**
	 * Display the specified resource.
	 * GET /category/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return \Response::json($this->categoryRepo->find($id, 'places'));
	}


}