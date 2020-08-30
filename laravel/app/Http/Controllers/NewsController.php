<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function newsAll()
    {
        //$news = DB::select('select * from news');
        //$news = DB::table('news')->get();
        $news = News::query()
            ->where('isPrivate', false)
            ->paginate(5);

        return view('news/all', [
            'news' => $news
        ]);
    }

    public function newsOne(News $news)
    {
        return view('news/one', [
            'news' => $news
        ]);
    }

    public function newsCategories()
    {
        return view('news/category/all', [
            'categories' => Category::query()->select([
                'id',
                'category',
                'name'
            ])->get()
        ]);
    }

    public function newsCategoriesId($id)
    {
        $cat = Category::query()
            ->select(['id', 'category'])
            ->where('name', $id)
            ->get();

        /*$news = News::query()
            ->where('category_id', $cat[0]->id)
            ->paginate(5);*/

        // Получаем данные через модель Category по связи таблиц
        $news = Category::query()
            ->find($cat[0]->id)
            ->news()
            ->paginate(5);

        return view('news/category/one', [
            'news' => $news,
            'category' => $cat[0]->category
        ]);
    }
}
