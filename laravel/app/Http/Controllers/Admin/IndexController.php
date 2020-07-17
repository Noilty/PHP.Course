<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin/index');
    }

    public function test()
    {
        return view('admin/test');
    }

    /**
     * Text
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Throwable
     */
    public function test2(Request $request)
    {
        $content = view('admin/test')->render();

        return response($content)
            ->header('Content-Type', 'application/text')
            ->header('Content-Length', mb_strlen($content))
            ->header('Content-Disposition', 'attachment; filename="downloaded.txt"');
    }

    /**
     * JSon
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function test3()
    {
        return response()->json(News::$news)
            ->header('Content-Disposition', 'attachment; filename="downloaded.json"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }

    public function test4()
    {
        return response()->download('large.jpg');
    }

    public function addNews(Request $request)
    {
        if ($request->isMethod('POST')) {
            // что то делаем с данными из формы
            $request->flash();
            return redirect()->route('admin.addNews');
        }
        return view('admin/news/add',[
            'categories' => News::$category
        ]);
    }

    public function addNews2()
    {
        return view('admin/news/add2',[
            'categories' => News::$category
        ]);
    }
}
