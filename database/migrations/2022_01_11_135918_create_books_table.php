<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',75);
            $table->string('title',50);
            $table->string('keywords',50)->nullable()->default('False');
            $table->string('description',50)->nullable()->default('False');
            $table->string('image',75)->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('quantity')->default(1);
            $table->text('detail',50)->nullable();
            $table->string('status',5)->nullable()->default('False');
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
        Schema::dropIfExists('books');
    }
}
