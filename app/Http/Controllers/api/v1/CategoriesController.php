<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->where('parent_id', '=', null)->get();
        foreach ($categories as $category) {
            $sub_category = DB::table('categories')->where('parent_id', '=', $category->id)->get();
            $category->sub_category = $sub_category;
        }
        return CategoryResource::collection($categories);
    }
}
