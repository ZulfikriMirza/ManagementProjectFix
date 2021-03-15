<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->string('name_pemesan');
            $table->string('email');
            $table->string('telphone');
            $table->text('address');
            $table->string('Provinsi');
            $table->string('Kabupaten');
            $table->string('kecamatan');
            $table->string('Kode_pos');
            $table->string('konsep');
            $table->integer('range_harga');
            $table->string('pengunaan_foto');
            $table->foreignId('jasa_id');
            $table->foreignId('users_id');
            $table->string('filename')->nullable();
            $table->boolean('status')->default(False);
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
        Schema::dropIfExists('order');
    }
}
