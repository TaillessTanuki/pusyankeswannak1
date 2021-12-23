<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelamar01sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar01s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('posisi');
            $table->string('nik')->unique();
            $table->string('nomor_kk')->unique();
            $table->string('alamat');
            $table->boolean('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->string('nomor_hp');
            $table->string('pendidikan_terakhir');
            $table->string('npwp');
            $table->string('tanggal_skck');
            $table->string('nomor_rekening');
            $table->string('instansi_surat_kesehatan');
            $table->string('pdf_ktp');
            $table->string('pdf_kk');
            $table->string('pdf_pasfoto4x6');
            $table->string('pdf_ijazah&transkrip');
            $table->string('pdf_npwp');
            $table->string('pdf_skck');
            $table->string('pdf_suratkesehatan');
            $table->string('pdf_sertifikat');
            $table->string('pdf_sim');
            $table->string('pdf_suratlamaran');
            $table->string('pdf_cv');

            
            
            
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
        Schema::dropIfExists('pelamar01s');
    }
}
