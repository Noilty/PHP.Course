<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class IndexController extends Controller
{
    public function addNews2()
    {
        return view('admin/news/add2', ['categories' => []]);
    }

    public  function test1(Request $request)
    {
        $content = view('admin.test1')->render();
        return response($content)
            ->header('Content-type', 'application/text')
            ->header('Content-Length', mb_strlen($content))
            ->header('Content-Disposition', 'attachment; filename="download.txt"');
    }

    public  function test2()
    {
        return response()->json(News::getNews())
            ->header('Content-Disposition', 'attachment; filename="download.json"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }

    public  function test3()
    {
        return response()->download('images/photo.jpg');
    }
}
