<?php 
$database = mysqli_connect('127.0.0.1','root','','al494_brightonbarbarians');
if(mysqli_connect_errno()){
  echo 'Database connection has failed:'.mysqli_connect_errno();
  die();
  }
  
  define('BASEURL', '/Projectwebsite/');
  
  
  $host = '127.0.0.1';
  $user = 'root';
  $pass = '';
  $database_name = 'al494_brightonbarbarians';
  
  $mysqli = new mysqli($host,$user,$pass,$database_name) or die($mysqli->error);
  
  
  
  
  
  ?>