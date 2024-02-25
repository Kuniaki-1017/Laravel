<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//Modelを継承したクラスBlogを使用すれば、blogsテーブルのtitleとcontentカラムを操作できる
class Blog extends Model
{
    use HasFactory;
    //テーブル名を決める
    protected $table = 'blogs';

    //可変項目（保存したい値）
    protected $fillable = [
        'title',
        'content'
    ];
}
