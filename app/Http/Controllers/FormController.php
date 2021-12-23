<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelamar01;
use PhpParser\Node\Expr\AssignOp\Concat;

class FormController extends Controller
{
    //
    function index(){
        return view('form_pendaftaran_pelamar');
    }


    function add(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'posisi'=>'required',
            'nik'=>'required',
            'nomor_kk'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
            'tanggal_lahir'=>'required',
            'nomor_hp'=>'required',
            'pendidikan_terakhir'=>'required',
            'npwp'=>'required',
            'tanggal_skck'=>'required',
            'nomor_rekening'=>'required',
            'instansi_surat_kesehatan'=>'required',
            'pdf_ktp'=>'required',
            'pdf_kk'=>'required',
            'pdf_passfoto4x6'=>'required',
            'pdf_ijazah&transkrip'=>'required',
            'pdf_npwp'=>'required',
            'pdf_skck'=>'required',
            'pdf_suratkesehatan'=>'required',
            'pdf_sertifikat'=>'required',
            'pdf_sim'=>'required',
            'pdf_suratlamaran'=>'required',
            'pdf_cv'=>'required',

        ]);

        $query = DB::table('users')->insert([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'posisi'=>$request->input('posisi'),
            'nik'=>$request->input('nik'),
            'alamat'=>$request->input('alamat'),
            'jenis_kelamin'=>$request->input('jenis_kelamin'),
            'tanggal_lahir'=>$request->input('tanggal_kelamin'),
            'nomor_hp'=>$request->input('nomor_hp'),
            'pendidikan_terakhir'=>$request->input('pendidikan_terakhir'),
            'npwp'=>$request->input('npwp'),
            'tanggal_skck'=>$request->input('tanggal_skck'),
            'nomor_rekening'=>$request->input('nomor_rekening'),
            'instansi_surat_kesehatan'=>$request->input('instansi_surat_kesehatan'),
            'pdf_ktp'=>$request->input('pdf_ktp'),
            'pdf_kk'=>$request->input('pdf_kk'),
            'pdf_passfoto4x6'=>$request->input('posisi'),
            'pdf_ijazah&transkrip'=>$request->input('pdf_ijazah&transkrip'),
            'pdf_npwp'=>$request->input('pdf_npwp'),
            'pdf_skck'=>$request->input('pdf_skck'),
            'pdf_suratkesehatan'=>$request->input('pdf_suratkesehatan'),
            'pdf_sertifikat'=>$request->input('pdf_sertifikat'),
            'pdf_sim'=>$request->input('pdf_sim'),
            'pdf_suratlamaran'=>$request->input('pdf_suratlamaran'),
            'pdf_cv'=>$request->input('pdf_cv'),

        ]);

        

        

    }
}
