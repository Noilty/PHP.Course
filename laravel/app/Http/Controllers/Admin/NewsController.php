<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public  function index()
    {
        $news = News::query()->paginate(5);

        return view('admin/index', ['news' => $news]);
    }

    public function updateNews(Request $request, News $news)
    {

    }

    public function deleteNews(Request $request, News $news)
    {

    }

    public function addNews(Request $request, News $news)
    {
        if ($request->isMethod('post')) {
            $request->flash(); //Запоминает введеные данные с формы

            $url = null;
            if ($request->file('image')) {
                $path = Storage::putFile('public', $request->file('image'));
                $url = Storage::url($path);
            }

            $data = [
                'title' => $request->title,
                //'category_id' => $request->category,
                'text' => $request->text,
                'image' => $url,
                'isPrivate' => isset($request->isPrivate)
            ];

            DB::table('news')->insert($data);

            return redirect()->route('news.all')
                ->with('success', 'Новость успешно добавлена');
        }
        return view('admin/news/add', [
            'news' => $news,
            'categories' => []
        ]);
    }
}
