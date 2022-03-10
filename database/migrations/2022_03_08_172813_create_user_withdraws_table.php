<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_withdraws', function (Blueprint $table) {
            $table->id();
            $table->integer('trx_amount');
            $table->integer('bdt_amount');
            $table->bigInteger('pay_number');
            $table->integer('pay_method');
            $table->integer('vat_reducation');
            $table->string('payable_amount');
            $table->date('date_of_submit');
            $table->string('status')->default('Request For Withdraw');
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
        Schema::dropIfExists('user_withdraws');
    }
}
