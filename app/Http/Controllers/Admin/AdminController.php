<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 04.01.19
 * Time: 22:58
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

class AdminController
{
    public function index() {
        return view('admin.index');
    }

    public function filemanager() {
        return view('admin.filemanager');
    }

    public function blog() {
        $categories = new CategoryController();
        $articles = new ArticleController();
        return view('admin.blog',['articles' => $articles->getArticles(), 'categories' => $categories->getCategories()]);
    }
}