<?php
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$to = "njsjegamca@gmail.com";
$subject = "hello Bees";
$txt = "This is jegadesh ";
$headers = "From: gotenjegadesh@gmail.com" . "\r\n" .
"CC: gotenjegadesh@gmail.com";
$result=mail($to,$subject,$txt,$headers);
var_dump($result);
?>