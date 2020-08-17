<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public static $news = [
        1 => [
            'id' => 1,
            'title' => 'News 1',
            'text' => 'News text 1',
            'category_id' => '1',
            'isPrivate' => false
        ],
        2 => [
            'id' => 2,
            'title' => 'News 2',
            'text' => 'News text 2',
            'category_id' => '2',
            'isPrivate' => false
        ],
        3 => [
            'id' => 3,
            'title' => 'News 3',
            'text' => 'News text 3',
            'category_id' => '1',
            'isPrivate' => false
        ],
        4 => [
            'id' => 4,
            'title' => 'News 4',
            'text' => 'News text 4',
            'category_id' => '1',
            'isPrivate' => false
        ]
    ];

    public static $category = [
        1 => [
            'id' => 1,
            'title' => 'Спорт',
            'title_translit' => 'sport'
        ],
        2 => [
            'id' => 2,
            'title' => 'Политика',
            'title_translit' => 'politika'
        ],
    ];
}
