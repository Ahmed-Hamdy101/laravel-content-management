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
    protected $table = 'post';
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id('id');
            $table->string('title',100);
            $table->string('content');
            $table->string('image');
            $table->integer('catagory_id');
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
        Schema::dropIfExists('Post');
    }
};
