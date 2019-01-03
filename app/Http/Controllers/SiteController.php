<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 03.01.19
 * Time: 15:23
 */

namespace App\Http\Controllers;


class SiteController extends Controller
{
    public function index() {
        return view('site.index');
    }
}