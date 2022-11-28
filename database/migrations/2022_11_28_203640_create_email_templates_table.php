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
        Schema::create('email_templates', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('subtitle', 100);
            $table->string('message', 1500);
            $table->enum('status', array('Active', 'Disabled', 'Expired'));
            // List of associated filters encoded as comma separated string.
            $table->string('associated_filters', 50);
            $table->date('last_sent');
            // Timestamps for when email template is updated.
            $table->timestamps();
            $table->enum('time_period', array('Y' , 'M', 'W', 'D', 'H'));
            // Frequency of 0 means template is currently being sent as a one off thing. No repeating cycle.
            $table->integer('frequency');
            $table->string();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_templates');
    }
};
