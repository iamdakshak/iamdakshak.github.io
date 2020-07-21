<?php
  $to = "dakshak1997@rediffmail.com";
  $subject = $_REQUEST['subject'];
  $txt = "Mail from : <b> ".$_REQUEST['name']." </b>\r\n".$_REQUEST['txt'];
  $headers = "From: ".$_POST['email']."\r\nCC: ".$_REQUEST['email'];
  mail($to,$subject,$txt,$headers);
  header("location: http://dakshak.ooo");
 ?>
