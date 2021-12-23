<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Pengaturan Admin</title>
  </head>

  <body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="admin-dashboard.php">
          <img src="logo-sistem.png" alt="" height="97" class="d-inline-block align-text-top" />
        </a>

        <text class="nav-item dropdown">
          <a class="navbar-brand fs-6 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Halo, ADMIN! </a>
          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
            <li><a class="dropdown-item" href="daftar-akun-admin.php">Buat Akun</a></li>
            <li><a class="dropdown-item" href="beranda.php">Keluar</a></li>
          </ul>
        </text>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row flex-nowrap">
        <div class="col-auto px-0">
          <div id="sidebar" class="collapse collapse-horizontal show border-end">
            <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start min-vh-100">
              <div class="d-flex flex-column flex-shrink-0 p-2 bg-light" style="width: 240px">
                <ul class="nav nav-pills flex-column mb-auto">
                  <li class="nav-item">
                    <a href="admin-dashboard.php" class="nav-link link-dark" aria-current="page">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="admin-dashboard.php" /></svg>
                      Dashboard
                    </a>
                  </li>
                  <li>
                    <a href="admin-data-pelamar.php" class="nav-link link-dark">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="admin-data-pelamar.php" /></svg>
                      Data Pelamar
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link link-dark dropdown-toggle" id="adminDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#" /></svg>
                      Input Nilai
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="adminDropdownMenuLink">
                      <li><a class="dropdown-item" href="admin-tes-tulis-grade.php">Nilai Ujian Tertulis</a></li>
                      <li><a class="dropdown-item" href="admin-wawancara-grade.php">Nilai Wawancara</a></li>
                      <li><a class="dropdown-item" href="admin-praktek-grade.php">Nilai Praktek</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="admin-cetak-laporan.php" class="nav-link link-dark">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="admin-cetak-laporan.php" /></svg>
                      Cetak Laporan
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="#" class="nav-link active dropdown-toggle" id="adminDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page">
                      <svg class="bi me-2" width="16" height="16"><use xlink:href="#admin" /></svg>
                      Pengaturan
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="adminDropdownMenuLink">
                      <li><a class="dropdown-item" href="admin-schedule.php">Update Jadwal</a></li>
                      <li><a class="dropdown-item" href="admin-log-activity.php">Log Activity</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <main class="col ps-md-center pt-2">
          <div class="container">
            <div class="page-header pt-2">
              <h4>UPDATE JADWAL</h4>
            </div>
            <hr />
            <div class="row">
              <form class="row">
                <div class="col-md-2">
                  <input type="text" readonly class="form-control-plaintext" id="" value="Seleksi Berkas" />
                </div>
                <div class="col-auto">
                  <input type="date" class="form-control" id="tanggal-seleksi-start" name="date-start" value="" required />
                </div>
                <div class="col-1">
                  <input type="text" readonly class="form-control-plaintext" id="" value="s/d" />
                </div>
                <div class="col-auto">
                  <input type="date" class="form-control" id="tanggal-seleksi-end" name="date-end" value="" required />
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                </div>
              </form>

              <form class="row">
                <div class="col-md-2">
                  <input type="text" readonly class="form-control-plaintext" id="" value="Ujian Tertulis" />
                </div>
                <div class="col-auto">
                  <input type="date" class="form-control" id="tanggal-tertulis-start" name="date-start" value="" required />
                </div>
                <div class="col-1">
                  <input type="text" readonly class="form-control-plaintext" id="" value="s/d" />
                </div>
                <div class="col-auto">
                  <input type="date" class="form-control" id="tanggal-tertulis-end" name="date-end" value="" required />
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                </div>
              </form>

              <form class="row">
                <div class="col-md-2">
                  <input type="text" readonly class="form-control-plaintext" id="" value="Wawancara" />
                </div>
                <div class="col-auto">
                  <input type="date" class="form-control" id="tanggal-wawancara-start" name="date-start" value="" required />
                </div>
                <div class="col-1">
                  <input type="text" readonly class="form-control-plaintext" id="" value="s/d" />
                </div>
                <div class="col-auto">
                  <input type="date" class="form-control" id="tanggal-wawancara-end" name="date-end" value="" required />
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                </div>
              </form>

              <form class="row">
                <div class="col-md-2">
                  <input type="text" readonly class="form-control-plaintext" id="" value="Ujian Praktek" />
                </div>
                <div class="col-auto">
                  <input type="date" class="form-control" id="tanggal-praktek-start" name="date-start" value="" required />
                </div>
                <div class="col-1">
                  <input type="text" readonly class="form-control-plaintext" id="" value="s/d" />
                </div>
                <div class="col-auto">
                  <input type="date" class="form-control" id="tanggal-praktek-end" name="date-end" value="" required />
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                </div>
              </form>

              <form class="row">
                <div class="col-md-2">
                  <input type="text" readonly class="form-control-plaintext" id="" value="Negosiasi" />
                </div>
                <div class="col-auto">
                  <input type="date" class="form-control" id="tanggal-negosiasi-start" name="date-start" value="" required />
                </div>
                <div class="col-1">
                  <input type="text" readonly class="form-control-plaintext" id="" value="s/d" />
                </div>
                <div class="col-auto">
                  <input type="date" class="form-control" id="tanggal-negosiasi-end" name="date-end" value="" required />
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </main>
      </div>
    </div>

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
