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
        Schema::create('purchased_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('current_plan');
            $table->float('plan_price');
            $table->string('duration');
            $table->dateTime('purchased_date');
            $table->dateTime('expiry_date');
            $table->string('buyer_name');
            $table->string('buyer_email');
            $table->bigInteger('buyer_mobile');
            $table->string('payment_id');
            $table->string('payment_status');
            $table->string('payment_request_id');
            $table->string('status')->default("0")->comment('0= rejected 1= active; 2= expired; 3= pending;');
            $table->string('user_id');
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
        Schema::dropIfExists('purchased_subscriptions');
    }
};
