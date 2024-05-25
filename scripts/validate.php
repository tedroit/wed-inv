<?php
    session_start();
    date_default_timezone_set("Asia/Jakarta");

    $valid = True;

    $txtNama = $_POST["txtNama"];
    $txtNoWa = $_POST["txtNoWa"];
    $txtAlamat = $_POST["txtAlamat"];
    $radioKerabat = $_POST["radioKerabat"];
    $captcha = $_POST["txtCaptha"];

    $captchaUser = filter_var($_POST["txtCaptha"], FILTER_SANITIZE_STRING);
    
    // ----- Nama
    if(empty($txtNama)) {
        $_SESSION['form']['NAMA']['ERROR'] = "Masukan Nama";
        $valid = FALSE;
    }
    elseif(strlen($txtNama)>200) {
        $_SESSION['form']['NAMA']['ERROR'] = "Max 200 karakter";
        $valid = FALSE;
    }

    // ----- WA
    if(empty($txtNoWa)) {
        $_SESSION['form']['WA']['ERROR'] = "Masukan Nomor WhatsApp";
        $valid = FALSE;
    }
    elseif(strlen($txtNoWa)>15) {
        $_SESSION['form']['WA']['ERROR'] = "Max 15 karakter";
        $valid = FALSE;
    }
    elseif(!is_numeric($txtNoWa)) {
        $_SESSION['form']['WA']['ERROR'] = "Hanya Nomor";
        $valid = FALSE;
    }

    // ----- ASAL
    if(empty($txtAlamat)) {
        $_SESSION['form']['ASAL']['ERROR'] = "Masukan Asal / Alamat";
        $valid = FALSE;
    }
    elseif(strlen($txtAlamat)>200) {
        $_SESSION['form']['ASAL']['ERROR'] = "Max 200 karakter";
        $valid = FALSE;
    }

    // ----- KERABAT
    if(empty($radioKerabat)) {
        $_SESSION['form']['KERABAT']['ERROR'] = "Pilih Kerabat";
        $valid = FALSE;
    }

    // ----- CAPTCHA
    if(empty($captcha)) {
        $_SESSION['form']['CAPTCHA']['ERROR'] = "Masukan kode";
        $valid = FALSE;
    }
    else if($_SESSION['CAPTCHA_CODE'] != $captchaUser){
        $_SESSION['form']['CAPTCHA']['ERROR'] = "Kode salah";
        $valid = FALSE;
    }

    if(!$valid)
    {
        $_SESSION['form']['ERROR'] = "True";
        $_SESSION['form']['NAMA']['VALUE'] = $txtNama;
        $_SESSION['form']['WA']['VALUE'] = $txtNoWa;
        $_SESSION['form']['ASAL']['VALUE'] = $txtAlamat;
        header("location: ../index.php", true, 301);
        exit();
    }

    $txtNama = preg_replace('/[^\da-z ]/i', '', $txtNama);
    $txtNoWa = preg_replace('/[^A-Za-z0-9\-]/', '', $txtNoWa);
    $txtAlamat = preg_replace('/[^A-Za-z0-9\ ]/', '', $txtAlamat);
    $radioKerabat = preg_replace('/[^A-Za-z0-9\-]/', '', $radioKerabat);

    include('../config/config.php');
    
    $sql = "set time_zone = '+07:00'; INSERT INTO guests_submission (submission_nama, submission_wa, submission_alamat, submission_kerabat, submission_ip, submission_datetime) VALUES ('".$txtNama."', '".$txtNoWa."', '".$txtAlamat."', '".$radioKerabat."', '".get_client_ip()."', now())";
    $connection->query($sql);

    if ($conn->error != "") {
        // $_SESSION['server']['ERROR'] = "Error: " . $conn->error;
        $_SESSION['server']['ERROR'] = "Mohon coba beberapa saat lagi";
    } else {
        $_SESSION['server']['SUCCESS'] = "True";
    }

    $connection = null;

    header("location: ../index.php", true, 301);
    exit();
?>