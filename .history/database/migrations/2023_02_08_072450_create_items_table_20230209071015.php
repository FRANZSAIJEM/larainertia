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
        Schema::create('items', function (Blueprint $table) {
            $table->bigInteger('id', 50)->unsigned();
            $table->bigInteger("office_id")->unsigned();
            $table->string("name", 100);
            $table->string("description", 100);
            $table->integer("value");
            $table->string("status");
            $table->date("date_acquired");
            $table->timestamps();

            $table->foreign('office_id')->references('id')->on('offices');
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
};
