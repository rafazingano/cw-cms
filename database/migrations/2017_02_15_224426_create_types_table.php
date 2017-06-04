<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('theme')->nullable();
            $table->string('layout')->nullable();
            $table->string('view')->default('post');
            $table->string('icon')->default('glyphicon glyphicon-menu-right');
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('option_type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->integer('option_id')->unsigned();
            $table->text('value')->nullable();
            $table->integer('order')->default(0);
            $table->foreign('type_id')
                    ->references('id')
                    ->on('types')
                    ->onDelete('cascade');
            $table->foreign('option_id')
                    ->references('id')
                    ->on('options')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('option_type');
        Schema::dropIfExists('types');
    }

}
