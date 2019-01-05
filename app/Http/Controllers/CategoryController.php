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
        return Category::get();
    }
}