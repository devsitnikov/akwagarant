<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 05.01.19
 * Time: 11:32
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;

class EditorController extends Controller
{
    public function add(){
        $categories = new CategoryController();
        return view('editor.add',['categories' => $categories->getCategories()]);
    }
}