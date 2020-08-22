<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function newsAll()
    {
        //$news = DB::select('select * from news');
        $news = DB::table('news')->get();

        return view('news/all', [
            'news' => $news
        ]);
    }

    public function newsOne($id)
    {
        /*$news = DB::select('select * from news where id=:id', [
            'id' => $id
        ]);*/
        $news = DB::table('news')->find($id);

        if (!empty($news)) {
            return view('news/one', [
                'news' => $news
            ]);
        } else {
            return redirect(route('news.all'));
        }
    }

    public function newsCategories()
    {
        return view('news/category/all', [
            'categories' => News::getCategories()
        ]);
    }

    public function newsCategoriesId($id)
    {
        $news = [];

        foreach (News::getCategories() as $item) {
            if ($item['title_translit'] == $id) $id = $item['id'];
        }

        if (array_key_exists($id, News::getCategories())) {
            $name = News::getCategories()[$id]['title'];
            foreach (News::getNews() as $item) {
                if ($item['category_id'] == $id) {
                    $news[] = $item;
                }
            }

            return view('news/category/one', [
                'news' => $news,
                'category' => $name
            ]);
        } else {
            return redirect(route('news.categories'));
        }

    }
}
