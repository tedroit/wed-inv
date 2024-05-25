<?php 
  session_start(); 
  date_default_timezone_set("Asia/Jakarta");
  
  include('config/config.php');
  $connection->query("set time_zone = '+07:00'");
  $user = $connection->query("SELECT * FROM jadwal_puasa WHERE waktu > now() order by waktu asc limit 1")->fetch();
  $next5 = $connection->query("SELECT * FROM jadwal_puasa WHERE waktu > now() order by waktu asc limit 5")->fetchAll();

  if(isset($_GET['id']) && $_GET['id']!="")
  {
    $guest = $connection->query("SELECT * FROM invitation WHERE id = '".$_GET['id']."'")->fetch();

    if($guest==null)
    {
      $_SESSION['server']['ERROR'] = "Ticket ID tidak ditemukan";
      include('locked.php');
    }
    else
    {
      $sql = "set time_zone = '+07:00'; UPDATE invitation SET last_ip = '".get_client_ip()."', last_access=now() WHERE id='".$_GET['id']."'";
      $connection->query($sql);

      $_SESSION['ticketid'] = $_GET['id'];
      $ucapans = $connection->query("SELECT * FROM invitation_ucapan join invitation on(ucapan_invitation_id=id) WHERE ucapan_status = 1 ORDER BY ucapan_sent_on desc")->fetchAll();
      include('unlocked.php');
    }
  }
  else
  {
    $_SESSION['server']['ERROR'] = "Masukan Ticket ID anda";
    include('locked.php');
  }
?>