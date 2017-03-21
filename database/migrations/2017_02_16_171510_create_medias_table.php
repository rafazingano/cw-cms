<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('file');
            $table->integer('status')->default(1);
            $table->timestamps();
        });
        
        Schema::create('gallery_media', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('media_id')->unsigned();
            $table->integer('gallery_id')->unsigned();
            $table->foreign('media_id')
                    ->references('id')
                    ->on('medias')
                    ->onDelete('cascade');
            $table->foreign('gallery_id')
                    ->references('id')
                    ->on('galleries')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallery_media');
        Schema::dropIfExists('medias');
    }
}
