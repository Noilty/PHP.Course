<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public static $news = [
        1 => [
            'id' => 1,
            'title' => 'title news 1',
            'text' => 'text news 1',
            'category_id' => 1,
            'isPrivate' => false
        ],
        2 => [
            'id' => 2,
            'title' => 'title news 2',
            'text' => 'text news 2',
            'category_id' => 1,
            'isPrivate' => false
        ],
        3 => [
            'id' => 3,
            'title' => 'title news 3',
            'text' => 'text news 3',
            'category_id' => 2,
            'isPrivate' => true
        ]
    ];

    public static $category = [
        1 => [
            'id' => 1,
            'category' => 'Спорт',
            'name' => 'sport'
        ],
        2 => [
            'id' => 2,
            'category' => 'Политика',
            'name' => 'politics'
        ]
    ];
}
