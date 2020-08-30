<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id')
                ->unsigned();
            $table->string('title')
                ->comment('Заголовок новости');
            $table->text('text')
                ->comment('Содержание новости');
            $table->boolean('isPrivate')
                ->comment('Приватная новость')
                ->default(false);
            $table->text('image')
                ->nullable(true)
                ->comment('URL картинки новости');
            /*$table->timestamp('created_at')
                ->useCurrent();
            $table->timestamp('updated_at')
                ->useCurrent();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
