<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        $data = $request->all();
        return Category::create($data);
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $category = Category::findOrFail($id);
        $res = $category->update($data);
        return $res ;
    }

    public function destroy( $id)
    {
        $category = Category::find($id);
        $category->delete();
        return "删除成功";

    }

    public function banner($category_id){
        $banners = Category::find($category_id)->banners;
        return $banners;
    }

    public function project($category_id){
        $projects = Category::find($category_id)->projects;
        return $projects;
    }
}
