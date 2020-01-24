<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("reg_no");
            $table->string("lat");
            $table->string("long");
            $table->unsignedBigInteger("users_id");
            $table->foreign("users_id")->references("id")->on("users");
            $table->unsignedBigInteger("areas_id");
            $table->foreign("areas_id")->references("id")->on("areas");
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
        Schema::dropIfExists('lands');
    }
}
