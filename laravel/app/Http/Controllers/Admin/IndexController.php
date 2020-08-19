<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public  function index()
    {
        return view('admin/index');
    }

    public function addNews()
    {
        return view('admin/news/add', ['categories' => News::$category]);
    }

    public function addNews2()
    {
        return view('admin/news/add2', ['categories' => News::$category]);
    }

    public  function test1()
    {
        return view('admin/test1');
    }

    public  function test2()
    {
        return view('admin/test2');
    }
}
