<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->nullable();
            $table->string('type')->nullable();
            $table->string('title')->nullable();
            $table->string('alt_titles')->nullable();
            $table->text('description')->nullable();
            $table->string('completion_year')->nullable();
            $table->integer('first_publication')->nullable();
            $table->string('publication_date')->nullable();
            $table->string('first_publication_country')->nullable();
            $table->integer('derivative')->nullable();
            $table->string('derivative_old')->nullable();
            $table->string('derivative_new')->nullable();
            $table->string('compilation')->nullable();
            $table->string('compilation_data')->nullable();
            $table->integer('self_author')->nullable();
            $table->integer('self_owner')->nullable();
            $table->integer('upload_files_now')->nullable();
            $table->string('status')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('works');
    }
}
