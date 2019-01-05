<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 05.01.19
 * Time: 22:07
 */

namespace App\Http\Controllers;


use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function save(Request $request) {
        $categories = [];
        foreach($request->categories as $category) {
            $categories[] = $category;
        }
        $name = $request->name;
        $slug = \Slug::make($request->name);
        $title = $request->title;
        $description = $request->description;
        $content = $request->content;

        $article = new Article();
        $article->name = $name;
        $article->slug = $slug;
        $article->title = $title;
        $article->description = $description;
        $article->content = $content;

        $article->save();

        $article->categories()->attach($categories);

        $url = route('article',[$slug]);
        return 'Статья добавлена <br>' . '<a href="' . $url . '" class="text-danger"> <span class="text-danger"><b>Перейти к статье</b></span></a>';
    }
}