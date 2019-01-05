<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 05.01.19
 * Time: 11:32
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class EditorController extends Controller
{
    public function add(){
        return view('editor.add');
    }
}