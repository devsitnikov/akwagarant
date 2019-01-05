<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 03.01.19
 * Time: 15:23
 */

namespace App\Http\Controllers;


use App\Article;

class SiteController extends Controller
{
    public function index() {
        return view('site.index');
    }

    public function blog() {
        return view('site.blog');
    }

    public function article(Article $article) {
        if ($article->name) {
            return view('site.article',[
                'name' => $article->name,
                'title' => $article->title,
                'slug' => $article->slug,
                'description' => $article->description,
                'content' => $article->content,
                'categories' => $article->categories
            ]);
        }
    }
}