<?php
//namesoace→ファイルがある場所のパスを示す
namespace App\Http\Controllers;

//useはファイルのインポート
//Illuminateはvender→laravel→src→illuminateのディレクトリのこと
use Illuminate\Http\Request;


//Controllerクラスを継承したBlogControllerクラスを作成
class BlogController extends Controller
{
    /**
     * ブログ一覧を表示する
     * 
     * @return view
     */
    public function showList()
    {
        //viewはresources→views→blog→list.blade.phpを返すことができる
        //blog.list→blogファイル/list.blade.php
        return view('blog.list');
    }
}
