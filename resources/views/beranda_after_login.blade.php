<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Beranda</title>
  </head>

  <body>
     <!-- Navigation bar -->
     <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="beranda-after-login.php">
          <img src="logo-sistem.png" alt="" height="97" class="d-inline-block align-text-top" />
        </a>

        <text class="nav-item dropdown">
          <a class="navbar-brand fs-6 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">

          Halo, PELAMAR! </a>

          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
            <li><a class="dropdown-item" href="profile.php">Profil</a></li>
            <li><a class="dropdown-item" href="beranda.php">Keluar</a></li>
          </ul>
        </text>
      </div>
    </nav>

    <img src="homepage_1.png" class="img-fluid" alt="">

    <br /><br /><br /><br />

    <div class="container">

     <div class="text-center">
      <a href= "timeline-penerimaan-login.php">
	      <button type="button" class="btn btn-outline-secondary btn-lg me-2">Timeline Penerimaan</button>
      </a>
      <a href= "persyaratan-umum-login.php">
        <button type="button" class="btn btn-outline-secondary btn-lg">Persyaratan Umum</button>
      </a>
    </div>

    <br /><br /><br /><br />

      <div class="row row-cols-4 row-cols-md-4 g-6">
        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="Petugas Kesehatan Satwa.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong01" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Petugas Kesehatan Satwa</h5>
            </div>
          </div>

          <div class="modal fade" id="exampleModalLong01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Petugas Kesehatan Satwa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
                Memeriksa, mendiagnosa, melakukan terapi pengobatan dan memberikan rekomendasi medis terkait kesehatan satwa/ternak dan membuat laporan medis.

                </br></br>
                
                <text class="fw-bold">Persyaratan Khusus</text></br>
                Petugas Kesehatan Satwa diutamakan yang sudah berpengalaman dibidangnya. Ijazah terakhir minimal Dokter Hewan.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="Tenaga Laboratorium.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong02" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Tenaga Laboratorium</h5>
            </div>
          </div>

          <div class="modal fade" id="exampleModalLong02" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tenaga Laboratorium</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
                Menerima, melakukan pengujian, membuat laporan hasil uji sampel serta memelihara peralatan kerja.

                </br></br>
                
                <text class="fw-bold">Persyaratan Khusus</text></br>
                Tenaga Laboratorium diutamakan yang sudah pernah bekerja di laboratorium/klinik hewan baik negeri ataupun swasta. Ijazah terakhir minimal SMA sederajat.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="Tenaga Teknis Perawat Satwa.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong03" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Tenaga Teknis Perawat Satwa</h5>
            </div>
          </div>

          <div class="modal fade" id="exampleModalLong03" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tenaga Teknis Perawat Satwa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
                Menerima, memelihara dan merawat satwa/ternak serta membersihkan kandang, sarana prasarana kandang dan lingkungan sekitarnya.

                </br></br>
                
                <text class="fw-bold">Persyaratan Khusus</text></br>
                Tenaga Teknis Perawat Satwa diutamakan yang sudah berpengalaman dibidangnya. Ijazah minimal SD sederajat.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="Petugas IPAL.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong04" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Petugas IPAL</h5>
            </div>
          </div>

          <div class="modal fade" id="exampleModalLong04" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tenaga Teknis Perawat Satwa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
                Menerima dan mengolah limbah (kotoran hewan dan hasil ikutannya) serta membersihkan dan memelihara IPAL serta lingkungan sekitarnya.

                </br></br>
                
                <text class="fw-bold">Persyaratan Khusus</text></br>
                Petugas IPAL diutamakan yang sudah berpengalaman dibidangnya. Ijazah minimal SD sederajat.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="Petugas Keurmaster.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong05" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Petugas Keurmaster</h5>
            </div>
          </div>

          <div class="modal fade" id="exampleModalLong05" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Petugas Keurmaster</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
                Memeriksa post-mortem ternak potong dan memberi tanda daging layak konsumsi.

                </br></br>
                
                <text class="fw-bold">Persyaratan Khusus</text></br>
                Petugas Keurmaster diutamakan yang sudah berpengalaman dibidangnya. Ijazah terakhir minimal SMP sederajat.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="Tenaga Mekanik dan Listrik.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong06" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Tenaga Mekanik dan Listrik</h5>
            </div>
          </div>

          <div class="modal fade" id="exampleModalLong06" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tenaga Mekanik dan Listrik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
                Memeriksa, memelihara, memonitoring dan melakukan perbaikan terhadap sarana prasarana kantor yang berhubungan dengan mesin dan elektronik.

                </br></br>
                
                <text class="fw-bold">Persyaratan Khusus</text></br>
                Tenaga Mekanik dan Listrik diutamakan yang sudah berpengalaman dibidangnya. Ijazah terakhir minimal SMA sederajat.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="Petugas Customer Relation.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong07" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Petugas Customer Relation</h5>
            </div>
          </div>

          <div class="modal fade" id="exampleModalLong07" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Petugas Customer Relation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
               Memberikan pelayanan prima dan membina hubungan baik dengan konsumen, menyediakan informasi dan menjawab pertanyaan seputar produk atau jasa, membantu menyelesaikan berbagai complain konsumen, melakukan promosi dan kerjasama serta membuat inovasi untuk menarik konsumen.

                </br></br>
                
                <text class="fw-bold">Persyaratan Khusus</text></br>
                Petugas Customer Relation diutamakan yang sudah berpengalaman dibidangnya. Ijazah terakhir minimal S1 Peternakan.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="Petugas Informasi.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong08" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Petugas Informasi</h5>
            </div>
          </div>

          <div class="modal fade" id="exampleModalLong08" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Petugas Informasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
                Mengelola data dan sistem informasi, melakukan update data dan informasi baik di sistem, web, serta sosial media, melakukan perawatan dan pemeliharaan sistem dan aplikasi baik software maupun hardware.

                </br></br>
                
                <text class="fw-bold">Persyaratan Khusus</text></br>
                Petugas Informasi diutamakan yang sudah berpengalaman dibidangnya. Ijazah terakhir minimal S1 Informatika/Komputer.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="Tenaga Supir.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong09" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Tenaga Supir</h5>
            </div>
          </div>

          <div class="modal fade" id="exampleModalLong09" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tenaga Supir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
                Mengemudikan, memelihara dan merawat kendaraan dinas operasional.

                </br></br>
                
                <text class="fw-bold">Persyaratan Khusus</text></br>
                Tenaga Supir diutamakan yang sudah berpengalaman dibidangnya. Ijazah terakhir minimal SMA sederajat dan memiliki SIM A dan C.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="Petugas Penerima Tamu.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong10" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Petugas Penerima Tamu</h5>
            </div>
          </div>

          <div class="modal fade" id="exampleModalLong10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Petugas Penerima Tamu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
                Menyapa, melayani, memberikan informasi kepada pengunjung atau pihak yang berkepentingan terkait tujuan yang diinginkan. 

                </br></br>
                
                <text class="fw-bold">Persyaratan Khusus</text></br>
                Petugas Penerima Tamu diutamakan yang sudah berpengalaman dibidangnya. Ijazah terakhir minimal SMA sederajat.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="Tenaga Keamanan Kantor.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong11" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Tenaga Keamanan Kantor</h5>
            </div>
          </div>

          <div class="modal fade" id="exampleModalLong11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tenaga Keamanan Kantor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
                Melakukan pengawasan dan pengamanan rutin sehari-hari baik gedung, fasilitas sarana dan prasarana, maupun sarana dan lingkungan di sekitarnya.

                </br></br>
                
                <text class="fw-bold">Persyaratan Khusus</text></br>
                Tenaga Keamanan Kantor diutamakan yang sudah berpengalaman dibidangnya. Ijazah terakhir minimal SMP sederajat dan memiliki sertifikat security.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>
        </div>

        <div class="col">
          <div class="card text-center">
            <a href="#"><img src="Tenaga Kebersihan Kantor.png" class="card-img-top" data-toggle="modal" data-target="#exampleModalLong12" alt="..." /></a>
            <div class="card-body">
              <h5 class="card-title">Tenaga Kebersihan Kantor</h5>
            </div>
          </div>

          <div class="modal fade" id="exampleModalLong12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tenaga Kebersihan Kantor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                
                <div class="modal-body">
                <text class="fw-bold">Uraian Umum Pekerjaan</text></br>
                Memelihara, merawat dan menjaga kebersihan kantor, taman, jalan, saluran serta sarana lain seperti mess, aula, rumah dinas, rumah potong hewan secara terus menerus setiap hari.

                </br></br>
                
                <text class="fw-bold">Persyaratan Khusus</text></br>
                Tenaga Kebersihan Kantor diutamakan yang sudah berpengalaman dibidangnya. Ijazah terakhir minimal SMP sederajat.
                </div>
              
                <div class="modal-footer">
                <a href="form-pendaftaran-pelamar.php">
                <button type="button" class="btn btn-primary">DAFTAR SEKARANG!</button>
                </a>
                </div>
            
                </div>
              </div>
          </div>
        </div>

      </div>
    </div>

    <br /><br /><br /><br />

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
