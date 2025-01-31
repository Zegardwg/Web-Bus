<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--font google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">


    <!--style-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--logo title-->
    <link rel="icon" href="assets/images/logo.png" type="image/x-icon-dark">
    <title>Trans Madiun</title>
  </head>
  <body id="home">
    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-light position-fixed w-100">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="assets/images/logo1.png" class="brand-transparent my-0" alt="" width="150" height="120">
          </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <!-- <li class="nav-item"> -->
              <a class="nav-link active" aria-current="page" href="#home">Beranda</a>
              <a class="nav-link "  href="#order">Cara Order</a>
              <a class="nav-link "  href="#jadwal">Jadwal</a>
              <a class="nav-link "  href="#layanan">Layanan</a>
              <a class="nav-link "  href="#about">Tentang Kami</a>

            </div>
            <div>
            <div class="auth-links">
                <a href="login.php" class="Daftar">Login</a>
                <a href="register.php" class="Masuk">Register</a>
                <style>
                .auth-links {
                  text-align: center;
                  margin: 20px 0;
                }

                .auth-links a {
                  display: inline-block;
                  margin: 0 10px;
                  padding: 10px 20px;
                  border-radius: 20px;
                  background-color: #007bff;
                  color: #fff;
                  text-decoration: none;
                }

                .auth-links a:hover {
                  background-color: #0056b3;
                }
            </style>
            </div>
          </div>
        </div>
      </nav>

      <!--section 1-->
      <body id="Beranda">
      <section id="hero">
       <img src="assets/images/bc1.png" class="img-fluid" alt="">
       <style>
      #hero {
      background-image: url('assets/images/bc1.png');
      background-size: 100% 100%;
      background-position: center center;
      }
      </style>
      </section>


      <!--section 2-->
  <br>
      <br>
      <br>
      <body id="order">
      <section class="carapakai" id="carapakai" >
      <section class="order" id="order" >
        <div class="heading">
            <span>Bagaimana Cara Ordernya?</span>
            <h1>Dengan 3 Langkah</h1>
        </div>
        <div class="kendaraan-container">
            <div class="box">
              <img src="assets/images/loc.png" style="width: 50px;" alt="">
                <h2>Tentukan Lokasi</h2>
                <p>Pilih shalter titik jemput anda</p>
            </div>

            <div class="box">
              <img src="assets/images/cal.png" style="width: 50px;" alt="">
                <h2>Tanggal Pemesanan</h2>
                <p>Tentukan tanggal pemesanan tempat duduk</p>
            </div>

            <div class="box">
              <img src="assets/images/bc .png" style="width: 50px;" alt="">
                <h2>Ambil Kode </h2>
                <p>Simpan kode unik untuk mendapatkan tempat duduk</p>
            </div>
        </div>
       </section>


        <!--Section Jadwal-->
      <section class="jadwal " id="jadwal">
        <!--<img src="assets/images/sec_jadwal.png" class="img-fluid" alt="">-->
        <div class="container-fluid banner-fluid" >
          <div class="container text-center" >
            <h2 class="text-center content-center my-5" style="padding-top: 30px ;">Jadwal Bus Relasi Kedungrejo - SMA 1 Mejayan</h1>
            <table class="table table-bordered border-dark table-responsive">
              <thead class="table-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Shelter</th>
                  <th scope="col">Nama Bus</th>
                  <th scope="col">Plat Nomor</th>
                  <th scope="col">Jam Keberangkatan</th>
                  <th scope="col">Jam Datang</th>
                </tr>
             </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Shelter A</td>
                  <td>Bus Name 1</td>
                  <td>BN12345</td>
                  <td>08:00</td>
                  <td>10:00</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Shelter B</td>
                  <td>Bus Name 2</td>
                  <td>BN67890</td>
                  <td>10:00</td>
                  <td>12:00</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Shelter C</td>
                  <td>Bus Name 3</td>
                  <td>BN23456</td>
                  <td>12:00</td>
                  <td>14:00</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Shelter D</td>
                  <td>Bus Name 4</td>
                  <td>BN78901</td>
                  <td>14:00</td>
                  <td>16:00</td>
                </tr>
              </tbody>
            </table>
            <h2 class="text-center content-center my-5">Jadwal Bus Relasi Gemarang - SMP 1 Mejayan</h1>
              <table class="table table-bordered border-dark table-responsive">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Shelter</th>
                    <th scope="col">Nama Bus</th>
                    <th scope="col">Plat Nomor</th>
                    <th scope="col">Jam Keberangkatan</th>
                    <th scope="col">Jam Datang</th>
                  </tr>
               </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Shelter A</td>
                    <td>Bus Name 1</td>
                    <td>BN12345</td>
                    <td>08:00</td>
                    <td>10:00</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Shelter B</td>
                    <td>Bus Name 2</td>
                    <td>BN67890</td>
                    <td>10:00</td>
                    <td>12:00</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Shelter C</td>
                    <td>Bus Name 3</td>
                    <td>BN23456</td>
                    <td>12:00</td>
                    <td>14:00</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Shelter D</td>
                    <td>Bus Name 4</td>
                    <td>BN78901</td>
                    <td>14:00</td>
                    <td>16:00</td>
                  </tr>
                </tbody>
              </table>
              <br>
              <br>
            </div>
          </div>
        </section>

        <!-- end section-->

        <!-- Carousel Section -->
        <section class="carousel">
          <br>
          <br>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/radarmadiun/2022/10/Tekan-Laka-Lantas-Pelajar-Pemkot-Madiun-Tambah-Dua-Unit-Armada-Bus-Sekolah-.jpeg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="https://asset.kompas.com/crops/l3ktsjNdF4tm3aGs_b_XZOYCHWs=/0x30:1280x883/750x500/data/photo/2022/05/27/628fb3633b9fb.jpeg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="https://live.staticflickr.com/5477/9395435759_08ce8b4bc4_b.jpg" class="d-block w-100" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </br>
    </br>
        </section>
        <style>
.carousel {
  position: relative;
  width: 85%;
  height: 85vh;
  left: 50%;
  transform: translateX(-50%);
}

.carousel-item {
  position: relative;
  width: 100%;
  height: 100%;
}

.carousel-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 50px;
  height: 50px;
  background-color: rgba(0, 0, 0, 0.3);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  text-align: center;
  opacity: 0.5;
  transition: opacity 0.3s ease;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
  opacity: 1;
}

.carousel-control-prev {
  left: 20px;
}

.carousel-control-next {
  right: 20px;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  width: 20px;
  height: 20px;
}

.visually-hidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
  white-space: nowrap;
}
            </style>
        <!-- End of Carousel Section -->

          <!-- About Section -->
                  <section class="about" id="about">
                    <br>
                    <br>
                    <!-- About Section -->
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-5">
                        <div class="col-md-7 heading-section text-center">
                            <br><span class="subheading">About</span>
                            <h2 class="mb-4">TRANS BUS MADIUN</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/radarmadiun/2021/11/caruban-terminal-sepi-WEB_.jpg" class="rounded img-fluid d-block mx-auto" alt="App">
                        </div>
                        <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                            <div class="left-heading">
                                <h5>Trans Bus Madiun</h5>
                            </div>
                            <div class="left-text">
                                <p>Merupakan salah satu sistem transportasi publik yang beroperasi di kota Madiun, Jawa Timur. Mereka menyediakan layanan bus reguler yang menghubungkan berbagai lokasi penting di dalam kota, memfasilitasi mobilitas penduduk setempat serta pengunjung. Dengan jadwal yang teratur, TRANS BUS MADIUN memberikan alternatif transportasi yang handal dan terjangkau bagi masyarakat. Dengan demikian, mereka berperan penting dalam mendukung konektivitas dan aksesibilitas kota Madiun.</p>
                                <a href="about.php" class="btn btn-warning">View More <iconify-icon icon="ion:arrow-forward-circle-outline"></iconify-icon></a>
                            </div>
                        </div>
            
        <!--section layanan-->
        <section id="layanan">
          <br>
            <br>
                  <div class="swiper-form-wrap">
          <!-- Swiper-->
          <div class="swiper-container swiper-slider swiper-slider_height-2 swiper-align-left swiper-align-left-custom context-dark bg-grey-darker" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
          <div class="swiper-wrapper">
          <div class="swiper-slide" data-slide-bg="img/3.jpg">
                <div class="swiper-slide-caption">
                  <div class="container container-bigger swiper-main-section">
                    <div class="row row-fix justify-content-sm-center justify-content-md-start">
                      <div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
                        <h3 style="color:#191970;">Silahkan Order Trans Kabupaten Madiun</h3>
                        <div class="divider divider-decorate"></div>
                        <p class="text-spacing-sm" style="color:#191970;">Melayani dengan sepenuh hati kemanapun tujuan anda. Ayo naik Bus!</p><a class="button button-default-outline button-nina button-sm" href="#" style="color:#191970;">Lihat selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container container-bigger form-request-wrap form-request-wrap-modern">
            <div class="row row-fix justify-content-sm-center justify-content-lg-end">
              <div class="col-lg-6 col-xxl-5">
                <div class="form-request form-request-modern bg-gray-lighter novi-background">
                  <center><h4>CARI JADWAL BUS </h4><center>
                  <!-- RD Mailform-->
                  <form class="rd-mailform form-fix" action = "jadwalkereta.php?email=<?= $email ?>" method="POST">
                    <div class="row row-20 row-fix">
                      <div class="col-sm-12">
                        <label class="form-label-outside">Halte Asal</label>
                        <div class="form-wrap form-wrap-inline">
                          <select class="form-input select-filter" data-placeholder="Pilih Stasiun" name="asal_stasiun">
                            <option value="StasiunY ogjakarta (YK)">SMP 1 CARUBAN</option>
                            <option value="Stasiun Gambir (GM)">SMP 2 CARUBAN</option>
                            <option value="Stasiun Gubeng (SGU)">SMA 1 CARUBAN</option>
                            <option value="Stasiun Solo Balapan (SLO)">SMA 2 CARUBAN</option>
                            <option value="Stasiun Tawang (SMT)">MAN CARUBAN </option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <label class="form-label-outside">Halte Tujuan</label>
                        <div class="form-wrap form-wrap-inline">
                          <select class="form-input select-filter" data-placeholder="Pilih Stasiun" name="stasiun_tujuan">
                          <option value="Stasiun Yogjakarta (YK)">SMP 1 CARUBAN</option>
                            <option value="Stasiun Gambir (GM)">SMP 2 CARUBAN</option>
                            <option value="Stasiun Gubeng (SGU)">SMA 1 CARUBAN</option>
                            <option value="Stasiun Solo Balapan (SLO)">SMA 2 CARUBAN</option>
                            <option value="Stasiun Tawang (SMT)">MAN 1 </option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-12 col-lg-6">
                        <label class="form-label-outside">Tanggal keberangkatan</label>
                        <div class="form-wrap form-wrap-validation">
                          <!-- Select -->
                          <input class="form-input" id="datepicker" name="tanggal_keberangkatan" type="date" data-time-picker="date" placeholder="Pilih Tanggal">
                          <!--select.form-input.select-filter(data-placeholder="All", data-minimum-results-for-search="Infinity",  name='city')-->
                          <!--  option(value="1") Choose the date-->
                          <!--  option(value="2") Primary-->
                          <!--  option(value="3") Middle-->
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <label class="form-label-outside">Waktu Berangkat</label>
                        <div class="form-wrap form-wrap-modern">
                          <input class="form-input input-append" id="form-element-stepper" type="time" min="1" max="300" value="0" name="dewasa">
                        </div>
                      </div>
                    </div>
                    <div class="auth-links">
                <a href="#" class="Cari">Cari</a>
                <style>
                .auth-links {
                  text-align: center;
                  margin: 20px 0;
                }

                .auth-links a {
                  display: inline-block;
                  margin: 0 10px;
                  padding: 10px 20px;
                  border-radius: 20px;
                  background-color: #007bff;
                  color: #fff;
                  text-decoration: none;
                }

                .auth-links a:hover {
                  background-color: #0056b3;
                }
                   </style>
                       </div>
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </section>

      <!--end section-->

      <!-- Marquee Section -->
      <div class="marquee">
            <h6></h6>
            <br>
            <br>
            <marquee behavior="" direction="">
                Selamat datang di website Bus Trans Madiun. Pesan tiket kereta api online dengan harga spesial, jadwal lengkap, dan mitra resmi Bus TRANS. Transaksi mudah dan aman dengan berbagai pilihan pembayaran.
            </marquee>
            </div>

          </div>
            </section>
            <!-- End of About Section -->

        <style>
.form-request-wrap-modern {
 background-color: #f5f5f5;
 padding: 50px;
 border-radius: 10px;
 }
.form-request-modern {
 background-color: #fff;
 padding: 30px;
 border-radius: 10px;
 }
.form-request-modern h4 {
 margin-bottom: 30px;
 }
.form-request-modern.form-input {
 margin-bottom: 20px;
 }
.form-request-modern.form-button {
 margin-top: 30px;
 }
 .rd-mailform {
  margin-top: 30px;
}

.form-label-outside {
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 10px;
  display: block;
}

.form-wrap {
  margin-bottom: 20px;
}

.select-filter {
  width: 100%;
  padding: 10px;
  font-size: 14px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="none" stroke="%23ccc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 5l6 6 6-6"/></svg>');
  background-repeat: no-repeat;
  background-position: right 10px center;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.select-filter:focus {
  outline: none;
  border-color: #666;
}

.select-filter::-ms-expand {
  display: none;
}
.rd-mailform {
  margin-top: 30px;
}

.form-label-outside {
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 10px;
  display: block;
}

.form-wrap {
  margin-bottom: 20px;
}

.form-wrap-inline {
  display: inline-block;
  width: 100%;
}

.form-input {
  width: 100%;
  padding: 10px;
  font-size: 14px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
}

.select-filter {
  background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill="none" stroke="%23ccc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 5l6 6 6-6"/></svg>');
  background-repeat: no-repeat;
  background-position: right 10px center;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.select-filter:focus {
  outline: none;
  border-color: #666;
}

.select-filter::-ms-expand {
  display: none;
}

/* Add some space between the two select elements */
.col-sm-12:nth-child(2) {
  margin-top: 20px;
}
.swiper-slide {
  position: relative;
}

.swiper-slide-caption {
  position: absolute;
  top: 90%;
  left: 45%;
  transform: translate(-50%, 85%);
  text-align: center;
  color: #fff; /* or any other color you prefer */
}


/* TESSSSS */

</style>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>