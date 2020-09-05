<?php

namespace App\Http\Controllers\Admin;

use App\Category;
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

        return view('admin.index', [
            'news' => $news
        ]);
    }

    public function updateNews(Request $request, News $news)
    {
        return view('admin.news.add', [
            'news' => $news,
            'categories' => Category::query()->select([
                'id',
                'category'
            ])->get()
        ]);
    }

    public function saveNews(Request $request, News $news)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, News::rules(), [], News::attributeNames());

            if ($request->file('image')) {
                $path = $request->file('image')->store('public');
                $news->image = Storage::url($path);
            }

            $result = $news->fill($request->all())->save();

            if ($result) {
                return redirect()
                    ->route('admin.index')
                    ->with('success', 'Новость успешно изменена');
            } else {
                $request->flash();

                return redirect()
                    ->route('admin.add.news')
                    ->with('error', 'Новость не изменена');
            }
        }
    }

    public function deleteNews(Request $request, News $news)
    {
        $news->delete();

        return redirect()->route('admin.index')
            ->with('success', 'Новость успешно удалена');
    }

    public function addNews(Request $request)
    {
        $news = new News();
        if ($request->isMethod('post')) {
            $request->flash(); //Запоминает введеные данные с формы

            $this->validate($request, News::rules(), [], News::attributeNames());

            $url = null;
            if ($request->file('image')) {
                $path = $request->file('image')->store('public');
                $news->image = Storage::url($path);
            }

            // Сохранение в базу данных
            $news->fill($request->all())->save();

            return redirect()->route('news.all')
                ->with('success', 'Новость успешно добавлена');
        }

        return view('admin.news.add', [
            'news' => $news,
            'categories' => Category::query()->select([
                'id',
                'category'
            ])->get()
        ]);
    }
}
