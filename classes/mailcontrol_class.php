<?php
/*
*  Mailcontrol Class v0.5
* ========================
* Author       : Kemal BALABAN
* Web          : http://www.kemalbalaban.com
* new versiyon : http://www.kemalbalaban.com/
* ======== Sürüm Notlarý ============ 
* -sýnýfa verilen mail adresini belirtilen limit ve mail standartlarýna uygunmu(mail@mailsite.com) diye kontrol eder.
* -verilen limit e ve standartlara uygunsa mail adresi mevcut sistemde php'nin checkdnsrr fonksiyonu aktifmi kontrol 
* eder aktif ise checkdnsrr ile maildeki domaini kontrol eder eðer checkdnsrr fonksiyonu aktif deðilse fsockopen fonksiyonu ile kontrol eder.
* kontrol sonucunu TRUE ise 1 FALSE ise 2 olarak yansýtýr 
* 
*/
  class MailControl{
      
      public $email;
      public $conf=array('limit'=>7,
                         'error'=>TRUE);
      
      function _mxcontrol()
      {
          if(strlen($this->email) >=$this->conf['limit']){
              if(preg_match('/^[a-z\'0-9]+([._-][a-z\'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$/i',$this->email)){
                  if(function_exists('checkdnsrr')){
                      if(checkdnsrr(array_pop(explode("@",$this->email)),"MX")){
                          return $this->_result(1);
                      }else{
                          return $this->_result(2);
                      }
                  }else{
                      if(@fsockopen(end(explode('@',$this->email)),80)){
                         return $this->_result(1);
                      }else{
                         return $this->_result(2);
                      }
                     
                  }
              }
          }
      }
      function _result($v){
          $this->sonuc=$v;
          if($this->conf['error']===TRUE){
              if($this->sonuc==1){
                  return TRUE;
              }else{
                  return FALSE;
              }
          }
      }
  }
?>
