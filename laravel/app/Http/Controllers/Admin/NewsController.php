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

        return view('admin.index', ['news' => $news]);
    }

    public function updateNews(Request $request, News $news)
    {
        return view('admin.news.add', [
            'news' => $news,
            'categories' => []
        ]);
    }

    public function saveNews(Request $request, News $news)
    {
        if ($request->isMethod('post')) {
            if ($request->file('image')) {
                $path = $request->file('image')->store('public');
                $news->image = Storage::url($path);
            }

            $news->fill($request->all());
            $news->save();

            return redirect()->route('admin.index')
                ->with('success', 'Новость успешно изменена');
        }
    }

    public function deleteNews(Request $request, News $news)
    {
        $news->delete();

        return redirect()->route('admin.index')
            ->with('success', 'Новость успешно удалена');
    }

    public function addNews(Request $request, News $news)
    {
        if ($request->isMethod('post')) {
            $request->flash(); //Запоминает введеные данные с формы

            $news = new News();

            $url = null;
            if ($request->file('image')) {
                //$path = Storage::putFile('public', $request->file('image'));
                $path = $request->file('image')->store('public');
                $news->image = Storage::url($path);
            }

            // Сохранение в базу данных
            $news->fill($request->all());
            $news->save();

            return redirect()->route('news.all')
                ->with('success', 'Новость успешно добавлена');
        }

        return view('admin.news.add', [
            'news' => $news,
            'categories' => []
        ]);
    }
}
