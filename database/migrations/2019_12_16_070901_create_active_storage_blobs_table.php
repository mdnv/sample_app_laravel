<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiveStorageBlobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_storage_blobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key');
            $table->string('filename');
            $table->string('content_type');
            $table->text('metadata');
            $table->unsignedbigInteger('byte_size');
            $table->string('checksum');

            $table->timestamps();

            $table->index('key')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('active_storage_blobs');
    }
}
