<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('no_ktp');
            $table->integer('id_homestay')->unsigned();
            $table->date('checkIn');
            $table->date('checkOut');
            $table->integer('jumlah_hari');
            $table->integer('jumlah_penginap');
            $table->integer('total_biaya');
            $table->timestamps();


            $table->foreign('id_user')->references('id')->on('users')->ondelete('CASCADE');
            $table->foreign('id_homestay')->references('id')->on('homestays')->ondelete('CASCADE');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
