<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_toko');
            $table->string('no_telp');
            $table->text('alamat');
            $table->timestamps();
        });

        DB::table('markets')->insert(
            array(
                'nama_toko' => 'Jass Collection',
                'no_telp' => '087861540874',
                'alamat' => 'Jl. Bungur Sernu Raya, Sumbawa Besar'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('markets');
    }
}
