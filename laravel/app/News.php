<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App
 *
 * @property string title
 * @property string text
 * @property string image
 * @property boolean isPrivate
 */
class News extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'title',
        'text',
        'isPrivate'
    ];
}
