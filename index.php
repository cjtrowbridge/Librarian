<?php

if(isset($_REQUEST['query'])){
  
  include('Librarian.php');
  $Librarian = new Librarian();
  $Query = $Librarian->Query( $_REQUEST['query'] );
  
  header("Content-Type: application/json; charset=UTF-8");
  $obj = json_decode($Query, true);

  
}else{
  
  echo file_get_contents('home.html');
  
}
