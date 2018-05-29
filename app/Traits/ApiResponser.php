<?php

namespace App\Traits;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Collection;

trait ApiResponser 
{
    /**
	 * Success response
	 *
	 * @param array $data
	 * @param int $code
	 * @return Response
	 */
	private function successResponse($data, $code)
	{
		return response()->json(['data' => $data], $code);
    }

    /**
	 * Show all response
	 *
	 * @param Collection $collection
	 * @param int $code 	            default 200
	 * @param boolean $useFilterData	option to use filter data or no
	 * @return Response 	            success response
	 */
	protected function showAll(Collection $collection, $code = 200, $useFilterData = true)
	{
		if ($useFilterData) {
			$collection = $this->filterData($collection);
		}

        return $this->successResponse($collection, $code);
    }

    /**
	 * Show one response
	 *
	 * @param Model $model
	 * @param int $code 	default 200
	 * @return response 	success response
	 */
	protected function showOne(Model $instance, $code = 200)
	{
        return $this->successResponse($instance, $code);
    }
    
    /**
	 * Error response
	 *
	 * @param string $message 	error message
	 * @param int $code 		http request code
	 * @return Response 		error response
	 */
	protected function errorResponse($message, $code)
	{
		return response()->json(['error' => $message, 'code' => $code], $code);
	}

	/**
	 * Filter data
	 *
	 * @param Collection $collection
	 * @return Collection $collection
	 */
	protected function filterData(Collection $collection)
	{
		foreach (request()->query() as $attribute => $value) {
			// If attribute and value is exist
			if (isset($attribute, $value)) {
				// Get data by
				$collection = $collection->where($attribute, $value);
			}
		}

		$collection = $collection->values();

		return $collection;
	}
}