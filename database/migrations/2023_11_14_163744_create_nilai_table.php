<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('tanggal');
            $table->string('hasil_nilai_lari');
            $table->string('hasil_nilai_pull_up');
            $table->string('hasil_nilai_sit_up');
            $table->string('hasil_nilai_push_up');
            $table->string('hasil_nilai_shuttle_run');
            $table->string('hasil_nilai_renang_dada');
            $table->string('hasil_nilai_renang_bebas');
            $table->string('nilai_garjas_A')->nullable();
            $table->string('nilai_garjas_B')->nullable();
            $table->string('total_nilai_garjas')->nullable();
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
        Schema::dropIfExists('nilai');
    }
}
