<?php

class Librarian{
  
  function __construct(){
    
  }
  function __destruct(){
    
  }
  function __call($Name, $Arguments){
    //TODO Include graceful error handling
    die('Librarian: Unknow function "'.$Name.'" called.'.var_export($Arguments,true));
  }
  
  public function Query($Query){
    //TODO add caching
    
    return $this->fetchWikipediaAbstract($Query);
    
  }
  
  private function fetchWikipediaAbstract($Query){
    $URL = "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro&explaintext&redirects=1&titles=".urlencode($Query);
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $URL);
    $result = curl_exec($ch);
    curl_close($ch);

    $obj = json_decode($result,true);
    
    //TODO Check for warnings
    
    return $obj['query']['pages'][0];
  }
  
}
