<?php

if(isset($_POST['query'])){
  
  include('Librarian.php');
  $Librarian = new Librarian();
  $Query = $Librarian->Query( $_POST['query'] );
  var_dump($Query);
  
}else{
  
  echo file_get_contents('home.html');
  
}
