<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 05.01.19
 * Time: 20:46
 */

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function save(Request $request) {
        if ($request->name) {
            $category = new Category();
            $category->name = $request->name;
            $category->save();
        }
    }

    public function getCategories() {
        $categories = new Category();
        return $categories->get();
    }

    public function deleteCategory(Request $request) {
        $category = Category::find($request->id);
        $category->articles()->detach();
        $category->delete();

    }
}