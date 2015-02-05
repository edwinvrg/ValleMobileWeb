<?php namespace Api1;

use ValleMovil\Managers\Comment\NewManager;
use ValleMovil\Repositories\CommentRepo;

class CommentController extends \BaseController {

    protected $commentRepo;

    public function __construct(CommentRepo $commentRepo)
    {
        $this->commentRepo = $commentRepo;
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /comment
	 *
	 * @return Response
	 */
	public function store()
	{
        $comment = $this->commentRepo->getModel();

        $manager = new NewManager($comment, \Input::all());
        $result = $manager->save();

        if($result)
            return \Response::json(200);

        return \Response::json(404);
	}
}