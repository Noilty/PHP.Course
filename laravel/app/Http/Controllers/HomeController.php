<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homeRoute = route('home');
        $adminRoute = route('admin.admin');
        return "
        <h1>Main</h1>
        <h3><a href='{$homeRoute}'>Main</a></h3>
        <h3><a href='{$adminRoute}'>Admin</a></h3>
        ";
    }
}
