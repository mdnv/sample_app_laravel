<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiveStorageAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_storage_attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('record_type');
            $table->unsignedbigInteger('record_id');
            $table->unsignedbigInteger('blob_id');
            $table->foreign('blob_id')->references('id')->on('active_storage_blobs')->onDelete('cascade');

            $table->timestamps();

            $table->index(['record_type', 'record_id', 'name', 'blob_id'], 'index_active_storage_attachments_uniqueness')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('active_storage_attachments');
    }
}
