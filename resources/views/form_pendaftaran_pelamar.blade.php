<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

     <!--Parsley JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
      section{
        padding-top:100px;
      }
      .form-section{
        padding-left:15px;
        display: none;
      }
      .form-section.current{
        display: inherit;
      }
      .btn-info, .btn-btn-success{
        margin-top:10px;
      }
      .parsely-errors-list{
        margin: 2px 0 3px;
        padding: 0;
        list-style-type: none ;
        color:red;
      }
    </style>
    
    
    <title>Form Pendaftaran Pelamar</title>
  </head>
  <body>


    <!-- Navigation bar -->
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="beranda-after-login.php">
          <img src="logo-sistem.png" alt="" height="97" class="d-inline-block align-text-top" />
        </a>

        <text class="nav-item dropdown">
          <a class="navbar-brand fs-6 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Halo, PELAMAR! </a>
          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
            <li><a class="dropdown-item" href="profile.php">Profil</a></li>
            <li><a class="dropdown-item" href="beranda.php">Keluar</a></li>
          </ul>
        </text>
      </div>
    </nav>


   <section>
     <div class="container">
       <div class="col-md-12 mb-4">
         <div class="card">
           <div class="card-header text-black-50 text-left">
            <h3>Form Pendaftaran</h3>
           </div>

           <div class="card-body">
            <form action="/store" method="POST" enctype="multipart/form-data"  class="row g-3 needs-validated">
              <div class="col-md-12 mb-4">
                @csrf
    
                <fieldset disabled>
                  <div class="form-group mb-4 col-md-4">
                    <label for="input-posisi" class="form-label">POSISI</label>
                    <a href="/users{{ $users->id(1) }}">{{ $user->nik }}
                    <input type="text" id="bagian" class="form-control" placeholder="">
                  </div>
                </fieldset>
    

                <fieldset disabled>
                  <div class="form-group mb-4">
                    <label for="input-nik" class="form-label">NIK</label>
                    <input type="text" id="nik" class="form-control" placeholder="">
                  </div>
                </fieldset>
    

                <div class="form-group mb-4">
                  <label for="input-no-kk">NO. KK</label>
                  <input type="text" name="nomor_kk" class="form-control" id="no-kk" maxlength="16" placeholder="" >    
                  <span style="color:red">@error('NO. KK'){{ $message }}@enderror</span> 
                </div>
                

                <fieldset disabled>
                <div class="form-group mb-4">
                  <label for="input-nama">NAMA (Sesuai KTP)</label>
                  <input type="text" class="form-control" id="nama" placeholder="">
                </div>
                </fieldset>
    

                <div class="form-group row mb-2">
                  <label for="input-alamat">ALAMAT</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="Jalan" aria-label="">
                    
                  </div>
                  <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="RT" m aria-label="">
                    
                  </div>
                  <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="RW" maxlength="3" aria-label="">
                    
                  </div>
                </div>
    

                <div class="form-group row mb-2">
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Kelurahan" aria-label="">
                   
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Kecamatan" aria-label="">
                    
                  </div>
                </div>
    

                <div class="form-group row mb-4">
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Kota" aria-label="">
                    
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Provinsi" aria-label="">
                    
                  </div>
                </div>

                
    

                <div class="form-group mb-4">
                  <label for="input-no-hp">JENIS KELAMIN</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki-laki" required>
                    <label class="form-check-label" for="jenis_kelamin1">
                    Laki-laki
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
                    <label class="form-check-label" for="jenis_kelamin2">
                    Perempuan
                    </label>
                  </div>
                  <span style="color:red">@error('Jenis Kelamin'){{ $message }}@enderror</span>
                </div>
    

                <div class="form-group mb-4 col-md-4">
                  <label for="input-tanggal-lahir">TANGGAL LAHIR</label>
                  <input type="date" class="form-control" id="tanggal-lahir" name="tanggal_lahir" value="" required>
                  <span style="color:red">@error('Tanggal Lahir'){{ $message }}@enderror</span>
                </div>
                

                <div class="form-group mb-4">
                  <label for="input-no-hp">NO. HP</label>
                  <input type="text" class="form-control" id="no-hp" name="nomor_hp" placeholder="" required>
                  <span style="color:red">@error('NO. HP'){{ $message }}@enderror</span>
                </div>
    

                <label for="input-pendidikan" class="form-label">PENDIDIKAN TERAKHIR</label>
                <div class="mb-4">
                  <select class="form-select" aria-label="select example" name="pendidikan_terakhir" required>
                    <option value="">Pilih...</option>
                    <option value="1">SMP/Sederajat</option>
                    <option value="2">SMA/SMK/Sederajat</option>
                    <option value="3">Diploma 1 (D1)</option>
                    <option value="4">Diploma 2 (D2)</option>
                    <option value="5">Diploma 3 (D3)</option>
                    <option value="6">Diploma 4 (D4)</option>
                    <option value="7">Sarjana (S1)</option>
                    <option value="8">Magister (S2)</option>
                  </select>
                  <div class="invalid-feedback">Pilih salah satu jawaban.</div>
                  <span style="color:red">@error('Pendidikan Terakhir'){{ $message }}@enderror</span>
                </div>
                

                <div class="form-group mb-4">
                  <label for="input-npwp">NPWP</label>
                  <input type="text" class="form-control" id="npwp" name="npwp" placeholder="" required>
                  <span style="color:red">@error('NPWP'){{ $message }}@enderror</span>
                </div>
    

                <div class="form-group mb-4 col-md-4">
                  <label for="input-tanggal-skck">TANGGAL SKCK</label>
                  <input type="date" class="form-control" id="tanggal-skck" name="tanggal_skck" value="" required>
                  <span style="color:red">@error('Tanggal SKCK'){{ $message }}@enderror</span>
                </div>
    

                <div class="form-group row mb-4">
                  <label for="input-alamat">REKENING (optional)</label>
                  <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="Nama Bank" aria-label="">
                  </div>
                 

                  <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Nomor Rekening" aria-label="">
                  </div>
                </div>
    

                <label for="input-instansi-surkes" class="form-label">INSTANSI SURAT KESEHATAN</label>
                <div class="mb-4">
                  <select class="form-select" aria-label="select example" name="instansi_surat_kesehatan" required>
                    <option value="">Pilih...</option>
                    <option value="1">Puskesmas</option>
                    <option value="2">Rumah Sakit Pemerintah</option>
                  </select>
                  <span style="color:red">@error('Instansi Surat Kesehatan'){{ $message }}@enderror</span>
                </div>


                <br>
                <br>


                <!-- Unggah Berkas -->

                <div class="mb-3">
                  <label for="formKTP" class="form-label">Unggah Kartu Tanda Penduduk</label>
                  <input class="form-control" type="file" id="formKTP" name="pdf_ktp" required>
                  <p class="fs-6">Format File PDF</p>
                  <span style="color:red">@error('Unggah Kartu Penduduk'){{ $message }}@enderror</span>
                </div>
    
                <div class="mb-3">
                  <label for="formKK" class="form-label">Unggah Kartu Keluarga</label>
                  <input class="form-control" type="file" id="formKK" name="pdf_kk" required>
                  <p class="fs-6">Format File PDF</p>
                  <span style="color:red">@error('Unggah Kartu Keluarga'){{ $message }}@enderror</span>
                </div>
    
                <div class="mb-3">
                  <label for="form-pas-photo" class="form-label">Unggah Pas Photo 4 x 6</label>
                  <input class="form-control" type="file" id="form-pas-photo" name="pdf_pasfoto4x6" required>
                  <p class="fs-6">Format File JPG</p>
                </div>
    
                <div class="mb-3">
                  <label for="form-ijazah-transkrip" class="form-label">Unggah Ijazah dan Transkrip Nilai</label>
                  <input class="form-control" type="file" id="form-ijazah-transkrip" name="pdf_ijazah&transkrip" required>
                  <p class="fs-6">Format File PDF</p>
                </div>
    
                <div class="mb-3">
                  <label for="formNPWP" class="form-label">Unggah NPWP</label>
                  <input class="form-control" type="file" id="formNPWP" name="pdf_npwp" required>
                  <p class="fs-6">Format File PDF</p>
                </div>
    
                <div class="mb-3">
                  <label for="formSKCK" class="form-label">Unggah Surat Keterangan Catatan Kepolisian</label>
                  <input class="form-control" type="file" id="formSKCK" name="pdf_skck" required>
                  <p class="fs-6">Format File PDF</p>
                </div>
    
                <div class="mb-3">
                  <label for="form-surat-kesehatan" class="form-label">Unggah Surat Kesehatan</label>
                  <input class="form-control" type="file" id="form-surat-kesehatan" name="pdf_suratkesehatan" required>
                  <p class="fs-6">Format File PDF</p>
                </div>
    
                <div class="mb-3">
                  <label for="form-sertifikat" class="form-label">Unggah Sertifikat</label>
                  <input class="form-control" type="file" id="form-sertifikat" name="pdf_sertifikat">
                  <p class="fs-6">Format File PDF</p>
                </div>
    
                <div class="mb-3">
                  <label for="form-SIM" class="form-label">Unggah Surat Izin Mengemudi (Khusus Tenaga Supir)</label>
                  <input class="form-control" type="file" id="formSIM" name="pdf_sim">
                  <p class="fs-6">Format File PDF</p>
                </div>
    
                <div class="mb-3">
                  <label for="form-surat-lamaran" class="form-label">Unggah Surat Lamaran</label>
                  <input class="form-control" type="file" id="form-surat-lamaran" name="pdf_suratlamaran" required>
                  <p class="fs-6">Format File PDF</p>
                </div>
    
                <div class="mb-3">
                  <label for="form-riwayat-hidup" class="form-label">Unggah Daftar Riwayat Hidup (CV)</label>
                  <input class="form-control" type="file" id="form-riwayat-hidup"  name="pdf_cv" required>
                  <p class="fs-6">Format File PDF</p>
                </div>



                <div class="container">
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/form_berkas">
                      <button class="btn btn-primary">SIMPAN ❯</button>
                    </a>
                  </div>
                </div>
    

              </div>
          </div>
           </div>
         </div>
       </div>
     </div>
     
   </section>

   <section>
     $(function(){

      var $sections = $('form-group')
          
      function navigateTo(index)

     })
   </section>

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2021 Hak Cipta:
        <a class="text-white" href="https://pusyankeswanak.jakarta.go.id/">PUSYANKESWANNAK</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
