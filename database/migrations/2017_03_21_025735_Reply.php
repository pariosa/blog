<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Board');
            $table->string('Tripseed');
            $table->string('Tripcode');
            $table->integer('Topic');
            $table->integer('Author');  
            $table->string('Subject');
            $table->string('Content');
            $table->string('Image');
            $table->string('Thumbnail');
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
             Schema::dropIfExists('replies');
    }
}
