<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 04.01.19
 * Time: 22:58
 */

namespace App\Http\Controllers\Admin;


class AdminController
{
    public function index() {
        return view('admin.index');
    }

    public function filemanager() {
        return view('admin.filemanager');
    }
}