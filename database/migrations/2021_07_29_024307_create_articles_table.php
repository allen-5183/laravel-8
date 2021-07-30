<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            //增加欄位
            $table->string('title');
            $table->text('content');
            $table->enum('state', ['draft', 'published']);
            //不用指定欄名，會用預設的 `deleted_at`
            $table->softDeletes();
            // $table->integer('user_id')->unsigned();
            //這欄位會指向另一表格: `user` 的欄位 `id`

            $table->foreignId("user_id");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}