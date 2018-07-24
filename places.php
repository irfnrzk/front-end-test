<?php

  // Read and decode json
  $json = file_get_contents('stores.json');
  $stores = json_decode($json);
  
  // Remove repeated "state" for button filter 
  foreach($stores as $store){  
    $result[$store->state] = null;
  }
  $values = array_keys($result); 

?>
