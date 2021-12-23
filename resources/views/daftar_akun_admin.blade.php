<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Daftar Akun Admin</title>
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

    <div class="container">
      <div class="row">
          <div class="col-md-6 offset-md-3">
              <div class="signup-form">
                  <form action="register-admin.php" method="POST" class="mt-5 border p-4 bg-light shadow needs-validated">
                      <h4 class="mb-4 text-center">DAFTAR AKUN</h4>
                      <div class="row">
                                                 
                          <div class="mb-3 col-md-12">
                            <label>Nama</label>
                            <input type="text" name="nama_admin" class="form-control" placeholder="Nama Lengkap" required>
                          </div>

                          <div class="mb-3 col-md-12">
                              <label>Username</span></label>
                              <input type="text" name="username" class="form-control" placeholder="Username" required>
                          </div>

                          <div class="mb-3 col-md-12">
                            <label>E-mail</label>
                            <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                          </div>
  
                          <div class="mb-3 col-md-12">
                            <label>Kata Sandi</label>
                            <input type="password" name="password" class="form-control" minlength="6" maxlength="10" placeholder="Kata Sandi" required>
                          </div>
                          
                          <div class="col-md-12 my-3">
                             <button class="btn btn-primary float-end">SIMPAN</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
           

    <br /><br /><br />

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
