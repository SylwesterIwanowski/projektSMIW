<?php
  if($_POST){

    if ( !empty($_POST["start"]) && !empty($_POST["time"]) && !empty($_POST["milikwh"])) {
      $data = $_POST["start"] ."*" . $_POST["time"] . "$" . $_POST["milikwh"] . "\n";  
      file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);  
    }else{
      $data = "\n";
      file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX); 
    }
  }
?>