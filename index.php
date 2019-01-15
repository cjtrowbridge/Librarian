<?php

if(isset($_REQUEST['query'])){
  
  include('Librarian.php');
  $Librarian = new Librarian();
  $Query = $Librarian->Query( $_REQUEST['query'] );
  var_dump($Query);
  
}else{
  
  echo file_get_contents('home.html');
  
}
