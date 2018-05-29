<?php

namespace App\Http\Controllers\Category;

use App\Category;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController as BaseController;

class CategoryApiController extends BaseController
{
    use ApiResponser;

    /**
     * Get all categories
     * 
     * @return response json
     */
    public function index()
    {
        $categories = Category::all();

        return $this->showAll($categories);
    }
}
