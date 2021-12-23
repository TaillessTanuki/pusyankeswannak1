<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Form Unggah Berkas Pelamar</title>
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

    <div class="container">
      <div class="py-5 text-left">
        <h3>Form Unggah Berkas</h3>
      </div>
    </div>

  <div class="container">
    <form class="row g-3 needs-validated">
          <div class="col-md-12 mb-4">

            <div class="mb-3">
              <label for="formKTP" class="form-label">Unggah Kartu Tanda Penduduk</label>
              <input class="form-control" type="file" id="formKTP" accept="application/pdf" required>
              <p class="fs-6">Format File PDF</p>
            </div>

            <div class="mb-3">
              <label for="formKK" class="form-label">Unggah Kartu Keluarga</label>
              <input class="form-control" type="file" id="formKK" accept="application/pdf" required>
              <p class="fs-6">Format File PDF</p>
            </div>

            <div class="mb-3">
              <label for="form-pas-photo" class="form-label">Unggah Pas Photo 4 x 6</label>
              <input class="form-control" type="file" id="form-pas-photo" accept="image/jpg" required>
              <p class="fs-6">Format File JPG</p>
            </div>

            <div class="mb-3">
              <label for="form-ijazah-transkrip" class="form-label">Unggah Ijazah dan Transkrip Nilai</label>
              <input class="form-control" type="file" id="form-ijazah-transkrip" accept="application/pdf" required>
              <p class="fs-6">Format File PDF</p>
            </div>

            <div class="mb-3">
              <label for="formNPWP" class="form-label">Unggah NPWP</label>
              <input class="form-control" type="file" id="formNPWP" accept="application/pdf" required>
              <p class="fs-6">Format File PDF</p>
            </div>

            <div class="mb-3">
              <label for="formSKCK" class="form-label">Unggah Surat Keterangan Catatan Kepolisian</label>
              <input class="form-control" type="file" id="formSKCK" accept="application/pdf" required>
              <p class="fs-6">Format File PDF</p>
            </div>

            <div class="mb-3">
              <label for="form-surat-kesehatan" class="form-label">Unggah Surat Kesehatan</label>
              <input class="form-control" type="file" id="form-surat-kesehatan" accept="application/pdf" required>
              <p class="fs-6">Format File PDF</p>
            </div>

            <div class="mb-3">
              <label for="form-sertifikat" class="form-label">Unggah Sertifikat</label>
              <input class="form-control" type="file" id="form-sertifikat" accept="application/pdf">
              <p class="fs-6">Format File PDF</p>
            </div>

            <div class="mb-3">
              <label for="form-SIM" class="form-label">Unggah Surat Izin Mengemudi (Khusus Tenaga Supir)</label>
              <input class="form-control" type="file" id="formSIM" accept="application/pdf">
              <p class="fs-6">Format File PDF</p>
            </div>

            <div class="mb-3">
              <label for="form-surat-lamaran" class="form-label">Unggah Surat Lamaran</label>
              <input class="form-control" type="file" id="form-surat-lamaran" accept="application/pdf" required>
              <p class="fs-6">Format File PDF</p>
            </div>

            <div class="mb-3">
              <label for="form-riwayat-hidup" class="form-label">Unggah Daftar Riwayat Hidup (CV)</label>
              <input class="form-control" type="file" id="form-riwayat-hidup" accept="application/pdf" required>
              <p class="fs-6">Format File PDF</p>
            </div>
            
          </div>
      </div>

    <div class="container">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="form-pendaftaran-pelamar.php">
          <button class="btn btn-primary me-md-2" type="button">❮ Sebelumnya</button>
        </a>
        <a href="profile.php">
          <button class="btn btn-primary" type="submit">Kirim</button>
        </a>
      </div>
    </div>
    </form>
  </div>

</br></br></br></br>

 <!-- Footer -->
 <footer class="text-lg-start text-white" style="background-color: #929fba">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
         <!-- Grid column -->
         <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">PUSYANKESWANNAK</h5>
          <p>Jl. Raya Bambu Apus Cipayung</br>
          Jakarta Timur</br>
          Telp. 021 8455748</br>
          Fax. 8455753</br>
          Email : puspelkeswan1@gmail.com</p>
        </div>
        
        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">Link Terkait</h5>
          <p> <a class="text-white" href="https://jakarta.go.id/">Pemerintah Provinsi DKI Jakarta</a></p>
          <p> <a class="text-white" href="https://www.pertanian.go.id/">Kementerian Pertanian</a></p> 
          <p> <a class="text-white" href="https://dkpkp.jakarta.go.id/">Dinas Ketahanan Pangan Kelautan dan Pertanian</a></p> </br>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">Follow us</h5>

          <!-- Facebook -->
          <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!" role="button"><i class="fa fa-facebook-f"></i></a>

          <!-- Youtube -->
          <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="https://www.youtube.com/channel/UC2Ipz8jxMVKEvffY3aH7TYg" role="button"><i class="fa fa-youtube"></i></a>

          <!-- Instagram -->
          <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="https://www.instagram.com/pusyankeswannak.jakarta/" role="button"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

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
