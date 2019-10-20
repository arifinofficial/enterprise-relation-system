<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('csubmission_id')->unsigned();
            $table->string('name');
            $table->dateTime('from');
            $table->dateTime('to');
            $table->string('description')->nullable();
            $table->string('file')->nullable();
            $table->enum('status', ['Diterima', 'Ditolak', 'Menunggu Konfirmasi'])->default('Menunggu Konfirmasi');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('csubmission_id')->references('id')->on('csubmissions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submissions');
    }
}
