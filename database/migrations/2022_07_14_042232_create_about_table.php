<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->text('about_title');
            $table->longText('about_text');
            $table->text('value_title');
            $table->longText('value_text');
            $table->text('vision_title');
            $table->longText('vision_text');
            $table->text('certificate_title');
            $table->string('certificate_img');
            $table->longText('certificate_text');
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
        Schema::dropIfExists('about');
    }
}
