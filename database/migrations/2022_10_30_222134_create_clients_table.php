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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("firstname", 100);
            $table->string("lastname", 100);
            $table->string("email", 100);
            $table->string("address", 100);
            $table->string("phonenumber", 100);
            $table->softDeletes();
            $table->enum("possibleFutureBusinesss", array("closed temporary", "closed permanent", "active"));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
