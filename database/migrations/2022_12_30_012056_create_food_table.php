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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('name_ka');
            $table->string('name_ru');
            $table->string('name_en');
            $table->mediumText('desc_ka');
            $table->mediumText('desc_ru');
            $table->mediumText('desc_en');
            $table->string('slug')->unique();
            $table->string('image');
            $table->string('price');
            $table->boolean('active')->default(true);
            $table->integer('place')->unique()->defaul(0);
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
        Schema::dropIfExists('food');
    }
};
