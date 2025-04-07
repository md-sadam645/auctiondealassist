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
        Schema::create('request_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('mobile');
            $table->string('email');
            $table->mediumText('message');
            $table->string('add_by_id');
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
        Schema::dropIfExists('request_inquiries');
    }
};
