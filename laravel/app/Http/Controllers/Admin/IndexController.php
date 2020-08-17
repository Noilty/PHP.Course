<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public  function index()
    {
        return 'Hello, Admin';
    }

    public  function test1()
    {
        return 'Hello, Test1';
    }

    public  function test2()
    {
        return 'Hello, Test2';
    }
}
