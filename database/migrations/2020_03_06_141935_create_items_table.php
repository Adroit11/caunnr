<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->longText('notes')->nullable();
            $table->string('slug')->nullable();
            $table->string('color')->nullable();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->double('discount', 8, 2)->nullable();
            $table->integer('rating')->nullable();
            $table->unsignedBigInteger('model_id');
            $table->index('model_id');
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade');
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
        Schema::dropIfExists('items');
    }
}
