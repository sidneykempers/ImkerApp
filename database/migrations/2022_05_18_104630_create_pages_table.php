<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title', length: 255);
            $table->string('subtitle', length: 255);
            $table->string('template', length: 255);
            $table->text('text');
            $table->text('text2');
            $table->string('banner_image_url', length: 255);
            $table->string('image_url1', length: 255);
            $table->string('image_url2', length: 255);
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
        Schema::dropIfExists('pages');
    }
};
