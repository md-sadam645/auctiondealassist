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
        Schema::create('property_lists', function (Blueprint $table) {
            $table->id();
            $table->string("bank_name");
            $table->string("branch_name_and_address")->nullable();
            $table->string("borrower_name");
            $table->string("property_type")->nullable();
            $table->mediumText("property_details");
            $table->string("area")->nullable();
            $table->string("possession");
            $table->string("locality")->nullable();
            $table->string("city")->nullable();
            $table->string("state");
            $table->bigInteger("reserve_price");
            $table->bigInteger("emd_amount");
            $table->bigInteger("bid_increment")->nullable();
            $table->string("inspection_date")->nullable();
            $table->string("emd_submission")->nullable();
            $table->dateTime("auction_start");
            $table->dateTime("auction_end");
            $table->string("authorized_officer")->nullable();
            $table->string("auction_portal")->nullable();
            $table->string("add_by");
            $table->string("status");
            $table->string("sale_notice")->nullable();
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
        Schema::dropIfExists('property_lists');
    }
};
