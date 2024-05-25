<?php
    session_start();
    date_default_timezone_set("Asia/Jakarta");

    $valid = True;

    $ticketid = $_SESSION['ticketid'];
    $txtUcapan = $_POST["txtUcapan"];
    $captcha = $_POST["txtCaptha"];

    $captchaUser = filter_var($_POST["txtCaptha"], FILTER_SANITIZE_STRING);
    
    // ----- txtUcapan
    if(empty($txtUcapan)) {
        $_SESSION['form']['UCAPAN']['ERROR'] = "Masukan Ucapan";
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
        $_SESSION['form']['UCAPAN']['VALUE'] = $txtUcapan;
        header("location: ../index.php?id=".$ticketid."#section-4", true, 301);
        exit();
    }

    $txtUcapan = addslashes($txtUcapan);

    include('../config/config.php');
    
    $sql = "set time_zone = '+07:00'; INSERT INTO invitation_ucapan (ucapan_invitation_id, ucapan_text, ucapan_status, ucapan_sent_on) VALUES ('".$ticketid."', '".$txtUcapan."', 1, now())";
    $connection->query($sql);

    if ($conn->error != "") {
        // $_SESSION['server']['ERROR'] = "Error: " . $conn->error;
        $_SESSION['server']['ERROR'] = "Mohon coba beberapa saat lagi";
    } else {
        $_SESSION['server']['SUCCESS'] = "Terimakasih Banyak Atas Doa Baik & Ucapannya";
    }

    $connection = null;

    header("location: ../index.php?id=".$ticketid."#section-4", true, 301);
    exit();
?>