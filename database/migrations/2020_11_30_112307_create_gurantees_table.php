<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuranteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurantees', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('id_no')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('address')->nullable();
            $table->text('status')->nullable();
     
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
        Schema::dropIfExists('gurantees');
    }
}
