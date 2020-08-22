<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    public  function index()
    {
        return view('admin/index');
    }

    public function addNews(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->flash(); //Запоминает введеные данные с формы

            $url = null;
            if ($request->file('image')) {
                $path = Storage::putFile('public', $request->file('image'));
                $url = Storage::url($path);
            }

            $data = News::getNews();
            $id = count($data) +1;
            $data[$id] = [
                'id' => $id,
                'title' => $request->title,
                'category_id' => $request->category,
                'text' => $request->text,
                'image' => $url,
                'isPrivate' => isset($request->isPrivate)
            ];

            // Сохранения данных в файл
            Storage::disk('local')->put('news.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

            return redirect()->route('news.all')
                ->with('success', 'Новость успешно добавлена');
        }
        return view('admin/news/add', ['categories' => News::getCategories()]);
    }

    public function addNews2()
    {
        return view('admin/news/add2', ['categories' => News::getCategories()]);
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
