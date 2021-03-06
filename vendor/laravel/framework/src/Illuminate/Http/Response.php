<?php namespace Illuminate\Http;

use ArrayObject;
use Illuminate\Support\Contracts\JsonableInterface;
use Illuminate\Support\Contracts\RenderableInterface;

class Response extends \Symfony\Component\HttpFoundation\Response {

	use ResponseTrait;

	/**
	 * The original content of the response.
	 *
	 * @var mixed
	 */
	public $original;

	/**
	 * Set the content on the response.
	 *
	 * @param  mixed  $content
	 * @return $this
	 */
	public function setContent($content)
	{
		$this->original = $content;

		// If the content is "JSONable" we will set the appropriate header and convert
		// the content to JSON. This is useful when returning something like Panini
		// from routes that will be automatically transformed to their JSON form.
		if ($this->shouldBeJson($content))
		{
			$this->headers->set('Content-Type', 'application/json');

			$content = $this->morphToJson($content);
		}

		// If this content implements the "RenderableInterface", then we will call the
		// render method on the object so we will avoid any "__toString" exceptions
		// that might be thrown and have their errors obscured by PHP's handling.
		elseif ($content instanceof RenderableInterface)
		{
			$content = $content->render();
		}

		return parent::setContent($content);
	}

	/**
	 * Morph the given content into JSON.
	 *
	 * @param  mixed   $content
	 * @return string
	 */
	protected function morphToJson($content)
	{
		if ($content instanceof JsonableInterface) return $content->toJson();

		return json_encode($content);
	}

	/**
	 * Determine if the given content should be turned into JSON.
	 *
	 * @param  mixed  $content
	 * @return bool
	 */
	protected function shouldBeJson($content)
	{
		return $content instanceof JsonableInterface ||
			   $content instanceof ArrayObject ||
			   is_array($content);
	}

	/**
	 * Get the original response content.
	 *
	 * @return mixed
	 */
	public function getOriginalContent()
	{
		return $this->original;
	}

}
