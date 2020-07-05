<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $adminTestRoute = route('admin.test');

        return "
        <h1>Admin</h1>
        <h3><a href='/'>Main</a></h3>
        <h3><a href='/admin'>Admin</a></h3>
        <h3><a href='{$adminTestRoute}'>Test</a></h3>
        ";
    }

    public function test()
    {
        return "
        <h1>Admin/Test</h1>
        <h3><a href='/'>Main</a></h3>
        <h3><a href='/admin'>Admin</a></h3>
        ";
    }
}
