<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_news', function (Blueprint $table) {
            $table->id();
            $table->Integer("newsCode")->Primary()->unique();
            $table->string("titleOfnews");
            $table->Integer("like")->default(0);
            $table->Integer("view")->default(0);
            $table->string("link");
            $table->string("video")->nullable()->default(null);
            $table->longText("summeryOfnews");
            $table->string("imgOfnews");
            $table->string("imgaltOfnews");
            $table->Integer("cat_idOfnews");
            $table->Integer("position")->default(0);
            $table->foreign("cat_idOfnews")->references("cat_code")->on("categories")->cascadeOnDelete();
            $table->longText("bodyOfnews");
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
        Schema::dropIfExists('my_news');
    }
}
