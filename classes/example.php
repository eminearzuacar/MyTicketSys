<?php
  include 'mailcontrol_class.php';
  $mail=new MailControl;
  $mail->email='deneme@kemalbalaban.com';
  $sonuc=$mail->_mxcontrol();
  if($sonuc==1){
      echo $mail->email.' can be true';
  }else{
      echo $mail->email.' certainly not true';
  }
?>