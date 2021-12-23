<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pelamar01 extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'posisi',
        'nik',
        'nomor_kk',
        'alamat',
        'jenis_kelamin',
        'tanggal_lahir' ,
        'nomor_hp' ,
        'pendidikan_terakhir' ,
        'npwp' ,
        'tanggal_skck' ,
        'nomor_rekening',
        'instansi_surat_kesehatan' ,
        'pdf_ktp' ,
        'pdf_kk' ,
        'pdf_pasfoto4x6' ,
        'pdf_ijazah&transkrip' ,
        'pdf_npwp' ,
        'pdf_skck' ,
        'pdf_suratkesehatan' ,
        'pdf_sertifikat' ,
        'pdf_sim' ,
        'pdf_suratlamaran' ,
        'pdf_cv' ,
    ];
}
