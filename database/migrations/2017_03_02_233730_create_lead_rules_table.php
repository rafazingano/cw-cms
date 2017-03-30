<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('lead_key')->unique();
            $table->text('lead_value');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('lead_rule_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lead_rule_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('lead_rule_id')
                    ->references('id')
                    ->on('lead_rules')
                    ->onDelete('cascade');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });
        
        Schema::create('lead_rule_lead', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lead_rule_id')->unsigned();
            $table->integer('lead_id')->unsigned();
            $table->foreign('lead_rule_id')
                    ->references('id')
                    ->on('lead_rules')
                    ->onDelete('cascade');
            $table->foreign('lead_id')
                    ->references('id')
                    ->on('leads')
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
        Schema::dropIfExists('lead_rule_lead');
        Schema::dropIfExists('lead_rule_user');
        Schema::dropIfExists('lead_rules');
    }
}
