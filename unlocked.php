<?php 
  session_start(); 
  date_default_timezone_set("Asia/Jakarta");
  
?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="author" content="Tedo Diah">
        <meta name="keywords" content="Tedo, Diah, Wedding, Invitation">
        <meta name="description" content="Dear <?= $guest['name'] ?>, You are invited to Tedo & Diah wedding ceremony">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=yes">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />

        <link rel="icon" type="image/png" href="././assets/img/favicon.png">
        <title>Tedo & Diah</title>
    
        <!-- CSS -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

        <link href="./assets/fontawesome/css/all.css" rel="stylesheet" />
        <link href="./assets/css/style.css?v=2.7" rel="stylesheet" />
        <link href="./assets/css/jquery-smooth-parallax.css?v=2.7" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" rel="stylesheet" />
        <link href="./assets/css/card-carousel.css" rel="stylesheet" />
    </head>

    <body>

        <div id="loading" class="vertical-center">
            <div>
                <div id="loadingGif" >
                    <img src="./assets/img/loading.gif" alt="Loading..." />
                    <div>Loading ...</div>
                </div>
                <button id="btnOpenPage" class="openPage btn btn-outline-dark px-5 d-none">OPEN</button>
            </div>
        </div>

        <button 
            id="btn-audio"
            href="#"
            class="btn btn-outline-light p-1 position-fixed"
            style="font-size: 20px;z-index: 99;bottom: 80;left: .25rem;background-color: rgb(191, 120, 100, .5);"
        ><i class="fa-regular fa-volume btn-audio"></i></button>

        <nav class="navbar navbar-dark container fixed-bottom rounded p-1 mb-2">
            <a class="navbar-brand btn color-1 m-2 rounded p-2" data-toggle="tooltip" data-placement="top" title="Beranda" href="#"><i class="far fa-house-chimney-heart"></i></a>
            <a class="navbar-brand color-1 m-2 rounded p-2" data-toggle="tooltip" data-placement="top" title="Pengantin" href="#section-1"><i class="far fa-crown"></i></a>
            <a class="navbar-brand color-1 m-2 rounded p-2" data-toggle="tooltip" data-placement="top" title="Acara" href="#section-2"><i class="far fa-cake-candles"></i></a>
            <a class="navbar-brand color-1 m-2 rounded p-2" data-toggle="tooltip" data-placement="top" title="Gallery" href="#section-3"><i class="far fa-image"></i></a>
            <a class="navbar-brand color-1 m-2 rounded p-2" data-toggle="tooltip" data-placement="top" title="Ucapan" href="#section-4"><i class="far fa-envelope"></i></a>
            <a class="navbar-brand color-1 m-2 rounded p-2" data-toggle="tooltip" data-placement="top" title="Gifts" href="#section-5"><i class="far fa-gift"></i></a>
        </nav>

        <!-- section-hero -->
        <section class="jarallax text-black" id="section-hero">
            <img class="jarallax-img" src="./assets/img/bg2.jpg" alt="" />
            <!-- <div class="hero-wrapper" style="background-image: url('./assets/img/bg1.jpg')"> -->
            <div class="hero-wrapper">
                <div class="hero-overlay overlay-white">
                </div>
                <img src="./assets/img/decor/corner-base-3.png" class="hero-overlay-decor-3" alt="">
                <img src="./assets/img/decor/corner-leaf-1.png" class="hero-overlay-leaf-1 animate-1 animating" alt="">
                <img src="./assets/img/decor/corner-leaf-2.png" class="hero-overlay-leaf-2 animate-2 animating" alt="">
                <img src="./assets/img/decor/corner-base-4.png" class="hero-overlay-decor-4" alt="">
                <img src="./assets/img/decor/corner-leaf-3.png" class="hero-overlay-leaf-3 animate-3 animating" alt="">
                <img src="./assets/img/decor/corner-leaf-4.png" class="hero-overlay-leaf-4 animate-4 animating" alt="">
                <div class="hero-content">
                    <img src="./assets/img/logo-line.png" class="hero-content-decor" alt="">
                    <h5 class="hero-dear">&nbsp;DEAR</h5>
                    <h1 class="hero-title font-type-great text-center text-black"><?= $guest['name'] ?></h1>
                    <h5 class="hero-desc text-center line-black text-black">  YOU ARE INVITED</h5>

                    <div id="countdown" class="countdown countdown-black text-center text-black row mt-3">
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

                    <div id="happening"
                        class="btn btn-danger p-1 mt-2 d-none"
                    ><i class="fa-solid fa-circle"></i>&nbsp;HAPPENING NOW</div>

                    <div>
                        <a 
                            href="http://www.google.com/calendar/event?action=TEMPLATE&text=Tedo%20%26%20Diah%20Wedding&dates=20220515/20220516&details=Kondangan%20nikahan%20Tedo%20%26%20Diah&location=Masjid%20Assalam%20Kunciran%20Mas%20Permai%20Blok%20K%20%26%20M"
                            class="btn btn-outline-dark p-2 mt-2"
                            target="blank"
                            style="width: 50px;"
                        ><i class="fa-regular fa-alarm-clock" style="font-size: 30px;"></i></a>
                        <a 
                            href="https://goo.gl/maps/4svBaw6D6FEZi4UL8"
                            target="blank"
                            class="btn btn-outline-dark p-2 mt-2 ml-1"
                            style="width: 50px;"
                        ><i class="fa-regular fa-location-dot" style="font-size: 30px;"></i></a>
                        <a 
                            href="#"
                            class="btn btn-outline-dark p-2 mt-2 ml-1"
                            style="width: 50px;"
                            data-toggle="modal" data-target="#checkInModal"
                        ><i class="fa-regular fa-plane-arrival" style="font-size: 30px;"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- section-hero -->

        <!-- section-1 -->
        <section class="content-section text-white text-center pt-5" style="background-image: url('./assets/img/section-1.jpg')" id="section-1" >
            <div class="container justify-content-center mb-10">
                <img src="./assets/img/basmalah-white.png" alt="" class="mb-2 basmalah" data-aos="fade-up" data-aos-duration="2000">

                <p class="mb-2" data-aos="fade-up" data-aos-duration="1300"><i>Assalamu’alaikum wa rohmatullahi wa barokatuh</i></p>
                <p class="mb-2" data-aos="fade-up" data-aos-duration="1400">
                    Maha suci Allah S.W.T yang telah menciptakan mahluk-Nya berpasang-pasangan.<br />
                    Ya Allah perkenankan kami untuk menikahkan putra-putri kami:
                </p>

                <div class="row justify-content-center">
                    <div class="col-md-5 d-flex flex-column align-items-center mb-4" id="section-1-men">
                        <div class="img-wrapper img-wrapper-left mb-6" data-aos="fade-right" data-aos-duration="1000" >
                            <img src="./assets/img/decor/flowers-left-spouse-tail.png" class="img-wrapper-left-rear animate-5">
                            <img src="./assets/img/decor/flowers-left-spouse-head.png" class="img-wrapper-left-rear">
                            <div class="img-wrapper-spouse" style="margin-left: 2em;">
                                <img src="./assets/img/tedo.jpg" alt="">
                            </div>
                            <img src="./assets/img/decor/img-wrapper-spouse-left.png" class="img-wrapper-left-front">
                        </div>
    
                        <h3 class="font-type-great" data-aos="fade-right" data-aos-duration="1500" >Muhamad Tedo Haris Candra, S.Kom</h3>
                        <h6 data-aos="fade-left" data-aos-duration="2000" >Anak pertama dari Bpk. Muhammad Mu'in, S.E & Ibu Ayu Mulyati</h6>
    
                        <!-- divider -->
                        <div class="divider mx-auto mb-2"></div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="https://www.instagram.com/tedroit/" target="blank"><img src="./assets/img/instagram.png" width="20px" alt=""></a>
                        </div>
                    </div>
                    
                    <h3 class="col-md-2 font-type-great dan mb-0" data-aos="fade-up" data-aos-duration="1300" >&</h3>

                    <div class="col-md-5 d-flex flex-column align-items-center mb-4" >
                        <div class="img-wrapper img-wrapper-right mb-6" data-aos="fade-left" data-aos-duration="1000" >
                            <img src="./assets/img/decor/flowers-right-spouse-tail.png" class="img-wrapper-right-rear animate-6">
                            <img src="./assets/img/decor/flowers-right-spouse-head.png" class="img-wrapper-right-rear">
                            <div class="img-wrapper-spouse" style="margin-right: 2em;">
                                <img src="./assets/img/diah.jpg" alt="">
                            </div>
                            <img src="./assets/img/decor/img-wrapper-spouse-right.png" class="img-wrapper-right-front">
                        </div>
    
                        <h3 class="font-type-great fw-bold" data-aos="fade-left" data-aos-duration="1500" >Diah Mutiara Rizki, S.E</h3>
                        <h6 data-aos="fade-right" data-aos-duration="2000" >Anak kedua dari Bpk. Drs. H. Zulpahri Lubis dan Ibu Nurmaini Simbolon</h6>
    
                        <!-- divider -->
                        <div class="divider mx-auto mb-2"></div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="https://www.instagram.com/diahmutiaraa04/" target="blank"><img src="./assets/img/instagram.png" width="20px" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- decoreation -->
            <img src="./assets/img/decor/lampion-left.png" alt="" class="decoration decor-ramadhan-1" data-aos="fade-down" data-aos-duration="2000" >
            <img src="./assets/img/decor/lampion-right.png" alt="" class="decoration decor-ramadhan-2" data-aos="fade-down" data-aos-duration="2000" >
            <img src="./assets/img/decor/foliage-light-left.svg" alt="" class="decoration section-decoration-1" data-aos="fade-left" data-aos-duration="2000" >
            <img src="./assets/img/decor/foliage-light-right.svg" alt="" class="decoration section-decoration-2" data-aos="fade-right" data-aos-duration="2000" >
            <img src="./assets/img/decor/leaf-white-left.png" alt="" class="decoration section-1-decoration-3" data-aos="fade-up-right" data-aos-duration="2000" >
            <img src="./assets/img/decor/leaf-white-right.png" alt="" class="decoration section-1-decoration-4" data-aos="fade-up-left" data-aos-duration="2000" >
        </section>
        <!-- end of section-1 -->

        <!-- section-2 -->
        <section class="content-section text-center pt-5" style="background-image: url('./assets/img/section-2.png')" id="section-2" >
            <div class="container mb-10">
                <h1 class="font-type-great m-0">Save the Date</h1>
                <img src="./assets/img/decor/decor-2.png" alt="" style="width: 100%; max-width: 400px;" data-aos="fade-up" data-aos-duration="2000" >
                <div class="card overlay-white">
                    <div class="card-body text-center">
                        
                        <div class="row mb-3">
                            <div class="col vertical-center pl-0 pr-2">
                                <h5 class="text-right w-100 m-0 font-type-dancing" style="letter-spacing: .2rem;"><b>MINGGU</b></h5>
                            </div>
                            <div class="col-auto border-right border-left border-dark px-2">
                                <h3 class="w-100 m-0" style="line-height: .8;">15</h3>
                                <span style="letter-spacing: .2rem;font-weight: bold;">MEI</span>
                            </div>
                            <div class="col vertical-center pl-2 pr-0">
                                <h5 class="text-left w-100 m-0 font-type-dancing" style="letter-spacing: .6rem;"><b>2022</b></h5>
                            </div>
                        </div>
                        <img src="./assets/img/decor/decor-1.png" alt="" style="width: 100%; max-width: 400px;" data-aos="fade-down" data-aos-duration="2000" >

                        <h2 class="font-type-dancing mb-0">Akad Nikah</h2>
                        <h5 class="mb-3">08:00</h5>
                        <h2 class="font-type-dancing mb-0">Resepsi</h2>
                        <h5 class="mb-3">11:00 - 15:00</h5>
                        <h2 class="font-type-dancing mb-0">Lokasi</h2>
                        <h5 class="m-0"><b>Masjid As-Salam</b></h5>
                        <span>Jl. Gunung Mahameru RT06/RW02, Blok K, Kunciran Mas Permai, Kec Pinang, Kota Tangerang</span>
                        
                        <iframe 
                            class="w-100 mt-3 rounded"
                            id="gmap_canvas" 
                            src="https://maps.google.com/maps?q=masjid%20assalam%20jl%20gunung%20mahameru%20kunciran&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" 
                            scrolling="no" 
                            marginheight="0" 
                            marginwidth="0"></iframe>
                            
                        <a 
                            href="https://goo.gl/maps/4svBaw6D6FEZi4UL8"
                            target="blank"
                            class="btn btn-outline-dark py-1 mt-3 w-100"
                        ><i class="fa-regular fa-location-dot"></i>&nbsp;Buka Google Map</a>
                    
                        <a 
                            href="./assets/img/Rute-Tol-dari-Jakarta.png"
                            target="blank"
                            class="btn btn-outline-dark py-1 mt-2 w-100"
                        ><i class="fa-regular fa-map"></i>&nbsp;Rute Tol dari Jakarta</a>
                    </div>
                </div>
            </div>

            <!-- decoreation -->
            <img src="./assets/img/decor/foliage-black-left.svg" alt="" class="decoration section-decoration-1" data-aos="fade-left" data-aos-duration="2000" >
            <img src="./assets/img/decor/foliage-black-right.svg" alt="" class="decoration section-decoration-2" data-aos="fade-right" data-aos-duration="2000" >
            <img src="./assets/img/decor/leaf-left-1.png" alt="" class="decoration section-1-decoration-3" style="width: 24em;" data-aos="fade-up-right" data-aos-duration="2000" >
            <img src="./assets/img/decor/leaf-right-1.png" alt="" class="decoration section-1-decoration-4" style="width: 24em;" data-aos="fade-up-left" data-aos-duration="2000" >
        </section>
        <!-- end of section-2 -->

        <!-- section-3 -->
        <section class="jarallax" id="section-3">
            <img class="jarallax-img" src="./assets/img/bg2.jpg" alt="" />
            <div class="hero-wrapper">
                <div class="hero-overlay">
                </div>
                <img src="./assets/img/decor/decor-1.png" alt="" class="hero-overlay-decor-1" style="width: 100%; max-width: 400px;" data-aos="fade-down" data-aos-duration="2000" >
                <img src="./assets/img/decor/decor-2.png" alt="" class="hero-overlay-decor-2" style="width: 100%; max-width: 400px;" data-aos="fade-up" data-aos-duration="2000" >
                <div class="hero-content px-2">
                    <div class="position-relative" id="outerPlayer">
                        <div id="player" class="w-100 h-100 position-absolute" style="top: 0;left: 0;">      
                            <img src="./assets/img/play.png" id="img-video" class="w-100 h-100" style="cursor: pointer;">
                        </div>
                    </div>
                    
                    <div class="w-100 mt-3">
                        <div class="card-carousel w-100">
                            <div class="my-card">
                                <img src="./assets/img/gallery/1.jpg" />
                            </div>
                            <div class="my-card">
                                <img src="./assets/img/gallery/2.jpg" />
                            </div>
                            <div class="my-card">
                                <img src="./assets/img/gallery/3.jpg" />
                            </div>
                            <div class="my-card">
                                <img src="./assets/img/gallery/4.jpg" />
                            </div>
                            <div class="my-card">
                                <img src="./assets/img/gallery/5.jpg" />
                            </div>
                          </div>
                    </div>

                </div>
                
            </div>
        </section>
        <!-- section-3 -->


        <!-- section-4 -->
        <section class="content-section text-center pt-3" style="background-image: url('./assets/img/bg-ramadhan.png')" id="section-4" >
            <div class="container mb-10">
                <img src="./assets/img/logo2.png" style="width: 100px" data-aos="fade-up" data-aos-duration="2000" />
                <h2 class="font-type-great mb-3 text-center text-white">Doa & Ucapan</h2>

                <button 
                    id="btn-add-ucapan"
                    data-toggle="modal" data-target="#sendUcapanModal"
                    class="btn btn-outline-light py-1 mb-3 mx-auto btn-block"
                    style="max-width: 600px;"
                ><h5 class="m-0"><i class="fa-regular fa-paper-plane"></i>&nbsp;Kirim Ucapan</h5></button>
                <div style="max-width: 600px; max-height: 60vh;overflow-y: scroll;overflow-x: hidden;" class="mx-auto">

                <?php foreach ($ucapans as $ucapan): ?>
                    <?php 
                        $inisial = explode(" ",$ucapan['name']);
                        if(count($inisial)==1)
                        {
                            $inisial = substr($inisial[0],0,1);
                        }
                        else if(count($inisial)>1)
                        {
                            $inisial = substr($inisial[0],0,1).substr($inisial[1],0,1);
                        }
                    ?>
                    <div class="row mb-3 pr-2">
                        <div class="col-auto pr-0">
                            <img src="https://cdn.statically.io/avatar/<?= $inisial ?>" style="width: 60px;height: 60px;" class="rounded-circle" />
                        </div>
                        <div class="col">
                            <div class="card overlay-white text-left">
                                <div class="card-body p-2">
                                    <h4 class="font-type-dancing mb-2"><?= $ucapan['name'] ?></h4>
                                    <?= htmlspecialchars($ucapan['ucapan_text']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                </div>
                
            </div>

            <!-- decoreation -->
            <img src="./assets/img/decor/lampion-left.png" alt="" class="decoration decor-ramadhan-1" data-aos="fade-down" data-aos-duration="2000" >
            <img src="./assets/img/decor/lampion-right.png" alt="" class="decoration decor-ramadhan-2" data-aos="fade-down" data-aos-duration="2000" >
            <img src="./assets/img/decor/leaf-left-1.png" alt="" class="decoration section-1-decoration-3" style="width: 24em;" data-aos="fade-up-right" data-aos-duration="2000" >
            <img src="./assets/img/decor/leaf-right-1.png" alt="" class="decoration section-1-decoration-4" style="width: 24em;" data-aos="fade-up-left" data-aos-duration="2000" >
        </section>
        <!-- end of section-4 -->


        <!-- section-5 -->
        <section class="content-section text-center pt-5" style="background-image: url('./assets/img/section-5.jpg')" id="section-5" >
            <div class="container mb-10 text-white">
                <h1 class="mb-3 text-center"><i class="fal fa-gift"></i></h2>
                <p class="mb-3">Doa Restu Anda merupakan hadiah yang sangat berarti bagi kami. Namun jika memberi adalah ungkapan tanda kasih Anda, dengan kerendahan hati kami menerima dengan banyak terimakasih.</p>

                
                <button 
                    class="btn btn-outline-light py-1 mb-3 mx-auto btn-block"
                    style="max-width: 600px;"
                    data-toggle="collapse" href="#collapseRekening" role="button" aria-expanded="false" aria-controls="collapseRekening"
                ><i class="fa-regular fa-credit-card"></i>&nbsp;Rekening</button>
                <div class="collapse mb-5 mx-auto" id="collapseRekening" style="max-width: 600px;">
                    <div class="card card-body overlay-white">
                        
                        <div class="card card-body credit-card w-100 mb-3 mx-auto" style="max-width: 300px;border-radius: 1rem;">
                            <div class="row justify-content-end mb-2">
                                <div class="col-4">
                                    <img src="./assets/img/bca.png" class="w-100">
                                </div>
                            </div>
                            <div class="row justify-content-between mb-3">
                                <div class="col-3">
                                    <img src="./assets/img/chip.png" class="w-100">
                                </div>
                                <div class="col-auto">
                                    <button 
                                        id="copyBCA"
                                        class="btn btn-outline-light p-1"
                                        onclick="copyToClipboard('copyBCA', '5475481400')"
                                    ><i class="fa-regular fa-copy"></i>&nbsp;copy</button>
                                </div>
                            </div>
                            <span>MUHAMAD TEDO HARIS CANDRA</span>
                            <h5 style="letter-spacing: 5px;">5475481400</h5>
                            
                        </div>

                        <div class="card card-body credit-card w-100 mx-auto" style="max-width: 300px;border-radius: 1rem;">
                            <div class="row justify-content-end mb-2">
                                <div class="col-6">
                                    <img src="./assets/img/mandiri.png" class="w-100">
                                </div>
                            </div>
                            <div class="row justify-content-between mb-3">
                                <div class="col-3">
                                    <img src="./assets/img/chip.png" class="w-100">
                                </div>
                                <div class="col-auto">
                                    <button 
                                        id="copyMandiri"
                                        class="btn btn-outline-light p-1"
                                        onclick="copyToClipboard('copyMandiri', '700010390123')"
                                    ><i class="fa-regular fa-copy"></i>&nbsp;copy</button>
                                </div>
                            </div>
                            <span>DIAH MUTIARA RIZKI</span>
                            <h5 style="letter-spacing: 5px;">700010390123</h5>
                            
                        </div>

                    </div>
                </div>
                
                <button 
                    class="btn btn-outline-light py-1 mb-3 mx-auto btn-block"
                    style="max-width: 600px;"
                    data-toggle="collapse" href="#collapseEwallet" role="button" aria-expanded="false" aria-controls="collapseEwallet"
                ><i class="fa-regular fa-wallet"></i>&nbsp;Ewallet</button>
                <div class="collapse mb-5 mx-auto" id="collapseEwallet" style="max-width: 600px;">
                    <div class="card card-body overlay-white">
                        
                        <div class="card card-body credit-card w-100 mb-3 mx-auto" style="max-width: 300px;border-radius: 1rem;background-size: 280%;" >
                            <img src="./assets/img/dana.png" width="250" class="mx-auto mb-3" />
                            <span>MUHAMAD TEDO HARIS CANDRA</span>
                            <span>[kode VA] + </span>
                            <h5 style="letter-spacing: 5px;">081310085220</h5>
                            <button 
                                id="copyDana"
                                class="btn btn-outline-light p-1 mt-2"
                                onclick="copyToClipboard('copyDana', '081310085220')"
                            ><i class="fa-regular fa-copy"></i>&nbsp;copy</button>
                        </div>

                    </div>
                </div>

                <div class="mt-5 mx-auto" style="max-width: 600px;">
                    <p>Merupakan kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada kedua mempelai.</p>
                    <h5 class="font-type-dancing">Kami yang berbahagia</h5>
                    <div class="row">
                        <div class="col-6 pl-0">
                            Bpk. Muhammad Mu'in, S.E<br />
                            Ibu Ayu Mulyati
                        </div>
                        <div class="col-6 pr-0">
                            Bpk. Drs. H. Zulpahri Lubis<br />
                            Ibu Nurmaini Simbolon
                        </div>
                    </div>
                    <img src="./assets/img/logo-text.png" style="width: 150px;" />
                </div>
            </div>

            <!-- decoreation -->
            <img src="./assets/img/decor/foliage-light-left.svg" alt="" class="decoration section-decoration-1" data-aos="fade-left" data-aos-duration="2000" >
            <img src="./assets/img/decor/foliage-light-right.svg" alt="" class="decoration section-decoration-2" data-aos="fade-right" data-aos-duration="2000" >
            <img src="./assets/img/decor/leaf-white-left.png" alt="" class="decoration section-1-decoration-3"  >
            <img src="./assets/img/decor/leaf-white-right.png" alt="" class="decoration section-1-decoration-4"  >
        </section>
        <!-- end of section-5 -->


        <!-- Check In -->
        <div id="checkInModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">
                    <i class="fa-regular fa-plane-arrival"></i>&nbsp;Arrival
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body text-center">
                    <div id="qrcheckin" class="w-100"></div>
                    <h3><?= $guest["id"] ?></h3>
                    <p>Tunjukkan QR ini ke penerima tamu sebagai pengganti pengisian buku tamu</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </div>
        <!-- Server Error Modal -->

        <!-- sendUcapanModal -->
        <div id="sendUcapanModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">
                    <i class="fa-regular fa-paper-plane"></i>&nbsp;Kirim Ucapan
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

                    <form id="mainForm" method="POST">
                        <div class="mb-3">
                          <label for="txtNama">Nama</label>
                          <input type="text" class="form-control" id="txtNama" name="txtNama" value="<?= $guest["name"] ?>" readonly="true" >
                        </div>
                        <div class="mb-3">
                          <label for="txtNoWa">Asal / Alamat</label>
                          <input type="text" class="form-control" id="txtNama" name="txtAlamat" value="<?= $guest["address"] ?>" readonly="true" >
                        </div>
                        <div class="mb-3">
                            <label for="txtAlamat">Ucapan</label>
                            <textarea class="form-control <?= ($_SESSION['form']['UCAPAN']['ERROR']!="")? "is-invalid" : "" ?>" name="txtUcapan"><?= $_SESSION['form']['UCAPAN']['VALUE'] ?></textarea>
                            <div class="invalid-feedback <?= ($_SESSION['form']['UCAPAN']['ERROR']!="")? "d-block" : "" ?>">
                                <?= $_SESSION['form']['UCAPAN']['ERROR'] ?>
                            </div>
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
        <!-- sendUcapanModal -->
        
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
            <source id="audioSource" src="./music/Mia Wray - Accidentally In Love.mp3" type="audio/mp3">
          </audio>
        </audio>

        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <!-- <script src="./assets/js/jquery-smooth-parallax.js"></script> -->
        <script src="./assets/js/jarallax.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="./assets/js/javascript.js?v=2.8"></script>
        <script src="https://www.youtube.com/player_api"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
        <script src="./assets/js/card-carousel.js"></script>
        <script src="./assets/js/jquery.qrcode.min.js" type="text/javascript" ></script>

        <script type="text/javascript">
            $( document).ready(function() {
                $('#qrcheckin').qrcode("tedodiah.com/checkin.php?id=<?= $guest["id"] ?>");

                <?php if (isset($_SESSION['form']['ERROR'])): ?>
                    $('#sendUcapanModal').modal('show');
                <?php endif ?>

                <?php if (isset($_SESSION['server']['ERROR'])): ?>
                    $('#errorServerModal-title').html("<i class='fa-regular fa-bug'></i>&nbsp;FAILED");
                    $('#errorServerModal-body').html("<?= $_SESSION['server']['ERROR'] ?>");
                    $('#errorServerModal').modal('show');
                <?php endif ?>
                
                <?php if (isset($_SESSION['server']['SUCCESS'])): ?>
                    $('#errorServerModal-title').html("<i class='fa-regular fa-check'></i>&nbsp;BERHASIL");
                    $('#errorServerModal-body').html("<?= $_SESSION['server']['SUCCESS'] ?>");
                    $('#errorServerModal').modal('show');
                <?php endif ?>
            });
        </script>
    </body>
</html>
<?php 
  unset($_SESSION['form']);
  unset($_SESSION['server']);
?>