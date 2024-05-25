<?php 
?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Tedo, Diah">
        <meta name="description" content="Cooming Soon Tedo&Diah">
  

        <link rel="icon" type="image/png" href="./assets/img/favicon.png">
        <title>Tedo & Diah</title>
    
        <!-- CSS -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

        <link href="./assets/fontawesome/css/all.css" rel="stylesheet">
        <link href="./assets/css/style.css?v=2.6" rel="stylesheet" />
        <link href="./assets/css/jquery-smooth-parallax.css?v=2.6" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
        <title>Tedo & Diah</title>
    </head>

    <body>
        <!-- section-hero -->
        <section class="jarallax text-white">
            <img class="jarallax-img" src="./assets/img/bg1.jpg" alt="" />
            <div class="hero-wrapper">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <img src="./assets/img/tedodiah-white.png" class="hero-content-decor" alt="">
                    <h1 class="hero-title font-type-great text-center">Marhaban Yaa Ramadhan</h1>
                    <h5 class="hero-desc-2 text-center">&nbsp;<?= strtoupper($user["text"]) ?></h5>

                    <label>Akan tiba dalam waktu</label>
                    <div class="countdown text-center text-white row">
                        <div class="col-3 p-0">
                            <label class="my-0 mx-2 p-2" id="timer-d">00</label><br />
                            day
                        </div>
                        <div class="col-3 p-0">
                            <label class="my-0 mx-2 p-2" id="timer-h">00</label><br />
                            hour
                        </div>
                        <div class="col-3 p-0">
                            <label class="my-0 mx-2 p-2" id="timer-m">00</label><br />
                            min
                        </div>
                        <div class="col-3 p-0">
                            <label class="my-0 mx-2 p-2" id="timer-s">00</label><br />
                            sec
                        </div>
                    </div>


                    <div class="w-100 row justify-content-center mt-3">
                        <div class="col-auto pr-0">
                            <input type="text" class="form-control bg-transparent border border-light text-white" style="width: 100px;" placeholder="Ticket ID" id="txtTicketId" />
                        </div>
                        <div class="col-auto pl-1">
                            <button type="button" class="btn btn-outline-light" id="btnSubmitTicket" style="font-size: 1.5rem;">
                              <i class="fa-regular fa-paper-plane-top"></i>
                            </button>
                        </div>
                    </div>
                    
                    <button 
                        id="btn-get-ticket"
                        href="#"
                        data-toggle="modal" data-target="#getTicketModal"
                        class="btn btn-outline-light py-1 mt-3"
                    ><i class="fa-regular fa-ticket"></i>&nbsp;GET TICKET</button>
                    <a 
                        href="#section-2"
                        class="btn btn-outline-light p-1 mt-2"
                    >JADWAL SOLAT</a>
                    <button 
                        id="btn-audio"
                        href="#"
                        class="btn btn-outline-light p-1 mt-2"
                        style="font-size: 20px;"
                    ><i class="fa-regular fa-volume btn-audio"></i></button>
                    
                </div>
            </div>
        </section>
        <!-- section-hero -->

        
        <!-- section-2 -->
        <section class="content-section text-center pt-3" style="background-image: url('./assets/img/bg-ramadhan.png')" id="section-2" >
            <div class="container mb-10">
                <img src="./assets/img/logo2.png" style="width: 100px" />
                <h2 class="font-type-great m-0 text-center text-white">Jadwal Solat<br />Ramadhan 1443</h2>

                <?php foreach ($next5 as $row): ?>
                <div class="card overlay-white mb-3">
                    <div class="card-body text-center p-0">
                        <?= date('d F Y',strtotime($row['waktu'])) ?>
                        <h2 class="font-type-dancing mb-0"><?= $row['text'] ?> <?= date('H:i',strtotime($row['waktu'])) ?></h2>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- decoreation -->
            <img src="./assets/img/decor/lampion-left.png" alt="" class="decoration decor-ramadhan-1" data-aos="fade-down" data-aos-duration="2000" >
            <img src="./assets/img/decor/lampion-right.png" alt="" class="decoration decor-ramadhan-2" data-aos="fade-down" data-aos-duration="2000" >
            <img src="./assets/img/decor/leaf-left-1.png" alt="" class="decoration section-1-decoration-3" style="width: 24em;" data-aos="fade-up-right" data-aos-duration="2000" data-aos-anchor="#section-2" >
            <img src="./assets/img/decor/leaf-right-1.png" alt="" class="decoration section-1-decoration-4" style="width: 24em;" data-aos="fade-up-left" data-aos-duration="2000" data-aos-anchor="#section-2" >
        </section>
        <!-- end of section-2 -->

        <!-- getTicketModal -->
        <div id="getTicketModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">
                    <i class="fa-regular fa-ticket"></i>&nbsp;GET TICKET
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <?php if (isset($_SESSION['form']['ERROR'])) { ?>
                      <div class="alert alert-danger" role="alert">
                        Mohon perbaiki beberapa kesalahan berikut
                      </div>
                    <?php } ?>
                    <p class="text-center">Terimakasih Banyak Atas Antusiasmenya</p>
                    S&K
                    <ol class="ml-0 pl-4 border">
                        <li class="mb-2">Acara ini adalah perayaan akad & resepsi pernikahan dari Tedo & Diah.</li>
                        <li class="mb-2">Kami akan memberikan tiket/undangan yang berisi informasi untuk bisa hadir ke acara ini.</li>
                        <li class="mb-2">Tiket/undangan akan dikirimkan ke kontak yang anda masukkan melalui form di bawah ini serentak pada tanggal 19 April 2022.</li>
                        <li class="mb-2">Pastikan kontak yang anda masukkan mudah kami kenali karena data akan melalui beberapa proses validasi.</li>
                        <li class="mb-2">Tamu acara terbatas hanya bagi pemegang tiket/undangan, mohon membawa tiket/undangan saat berada di lokasi acara.</li>
                        <li class="mb-2">Dilarang untuk memperjual belikan tiket/undangan dalam bentuk dan metode apapun.</li>
                    </ol>

                    <form id="mainForm" method="POST">
                        <div class="mb-3">
                          <label for="txtNama">Nama</label>
                          <input type="text" class="form-control <?= ($_SESSION['form']['NAMA']['ERROR']!="")? "is-invalid" : "" ?>" id="txtNama" name="txtNama" value="<?= $_SESSION['form']['NAMA']['VALUE'] ?>" >
                          <div class="invalid-feedback <?= ($_SESSION['form']['NAMA']['ERROR']!="")? "d-block" : "" ?>">
                            <?= $_SESSION['form']['NAMA']['ERROR'] ?>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="txtNoWa">Nomor WhatsApp</label>
                          <input type="text" class="form-control <?= ($_SESSION['form']['WA']['ERROR']!="")? "is-invalid" : "" ?>" id="txtNoWa" name="txtNoWa" value="<?= $_SESSION['form']['WA']['VALUE'] ?>" >
                          <div class="invalid-feedback <?= ($_SESSION['form']['WA']['ERROR']!="")? "d-block" : "" ?>">
                            <?= $_SESSION['form']['WA']['ERROR'] ?>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="txtAlamat">Asal / Alamat</label>
                          <input type="text" class="form-control <?= ($_SESSION['form']['ASAL']['ERROR']!="")? "is-invalid" : "" ?>" id="txtAlamat" name="txtAlamat" value="<?= $_SESSION['form']['ASAL']['VALUE'] ?>" >
                          <div class="invalid-feedback <?= ($_SESSION['form']['ASAL']['ERROR']!="")? "d-block" : "" ?>">
                            <?= $_SESSION['form']['ASAL']['ERROR'] ?>
                          </div>
                        </div>
                        Kerabat Dari
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioKerabat" id="radioKerabatTedo" value="T" checked>
                            <label class="form-check-label" for="radioKerabatTedo">
                                Tedo
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="radioKerabat" id="radioKerabatDiah" value="D">
                            <label class="form-check-label" for="radioKerabatDiah">
                                Diah
                            </label>
                        </div>
                        <div class="invalid-feedback <?= ($_SESSION['form']['KERABAT']['ERROR']!="")? "d-block" : "" ?>">
                          <?= $_SESSION['form']['KERABAT']['ERROR'] ?>
                        </div>
                        <img src="./scripts/captcha.php" alt="PHP Captcha">
                        <div class="mb-3">
                          <label for="txtCaptha">Masukan Kode di Atas</label>
                          <input type="text" class="form-control <?= ($_SESSION['form']['CAPTCHA']['ERROR']!="")? "is-invalid" : "" ?>" id="txtCaptha" name="txtCaptha">
                          <div class="invalid-feedback <?= ($_SESSION['form']['CAPTCHA']['ERROR']!="")? "d-block" : "" ?>">
                            <?= $_SESSION['form']['CAPTCHA']['ERROR'] ?>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" id="btnKirim">Kirim</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </div>
        <!-- getTicketModal -->
        
        <!-- Server Error Modal -->
        <div id="errorServerModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="errorServerModal-title">
                    
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" id="errorServerModal-body">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </div>
        <!-- Server Error Modal -->
        
          <audio id="audio" hidden loop>
            <source id="audioSource" src="" type="audio/mp3">
          </audio>
        </audio>

        <script src="https://code.jquery.com/jquery-3.1.0.js" crossorigin="anonymous"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/js/jarallax.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="./assets/js/javascript-coomingsoon.js?v=2.6"></script>

        
        <script type="text/javascript">
          <?php if (isset($_SESSION['form']['ERROR'])) { ?>
            $('#getTicketModal').modal('show');
          <?php } ?>
          
          <?php if (isset($_SESSION['server']['ERROR'])) { ?>
            $('#errorServerModal-title').html("<i class='fa-regular fa-bug'></i>&nbsp;WARNING");
            $('#errorServerModal-body').html("<?= $_SESSION['server']['ERROR'] ?>");
            $('#errorServerModal').modal('show');
          <?php } ?>
          
          <?php if (isset($_SESSION['server']['SUCCESS'])) { ?>
            $('#errorServerModal-title').html("<i class='fa-regular fa-check'></i>&nbsp;BERHASIL");
            $('#errorServerModal-body').html("Terimakasih, mohon menunggu hingga waktu yang telah ditentukan");
            $('#errorServerModal').modal('show');
          <?php } ?>

          
          var countDownDate = new Date("<?= $user["waktu"] ?>").getTime();
        </script>
    </body>
</html>
<?php 
  unset($_SESSION['form']);
  unset($_SESSION['server']);
?>