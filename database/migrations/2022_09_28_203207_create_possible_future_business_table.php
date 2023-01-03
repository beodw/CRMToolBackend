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
        Schema::create('possible_future_business', function (Blueprint $table) {
            $table->id();
            $table->string("stage", 100);
            // $table->enum("status", array("closed temporary", "closed permanent", "active"));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('possible_future_business');
    }
};
