<?php

namespace App\Controllers\dashboard;
use App\Models\CategoriesModel;
use App\Controllers\BaseController;

class CategoryController extends BaseController
{
    public function index()
    {
        echo "hola mundo";
    }

    public function show()
    {
        $category = new CategoriesModel();
        var_dump($category->get());
    }
}
