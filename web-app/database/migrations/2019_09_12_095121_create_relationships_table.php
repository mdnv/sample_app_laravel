<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationships', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedbigInteger('follower_id');
            $table->unsignedbigInteger('followed_id');
            $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('followed_id')->references('id')->on('users')->onDelete('cascade');
            $table->index('follower_id');
            $table->index('followed_id');
            $table->index(['follower_id', 'followed_id'])->unique();
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
        Schema::dropIfExists('relationships');
    }
}

// php artisan make:migration create_relationships_table --create=relationships
