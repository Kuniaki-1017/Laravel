<?php

//オブジェクトの読み込み
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //実行
    public function up(): void
    {
        //既に同じテーブルがあるか判定
        if (!Schema::hasTable('blog')) {
            //blogテーブル作成
            Schema::create('blogs', function (Blueprint $table) {
                $table->id(); //初期値：id
                $table->string('title', 100); //文字列、titleカラム、100文字
                $table->text('content'); //文字列、contentカラム、text→文字数制限なし
                $table->timestamps(); //初期値：作成時間、更新時間
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    //削除
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
