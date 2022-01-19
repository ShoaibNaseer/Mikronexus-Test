<?php
  
if(isset($_POST['data'])) {
    $data= $_POST['data'];
    $inp = file_get_contents('array.json');
    $tempArray = json_decode($inp);
    
    if($tempArray) {
        array_push($tempArray, $data);
        $jsonData = json_encode($tempArray);
    }
    else {
        $jsonData=json_encode(array($data));
    }
      
    file_put_contents('array.json', $jsonData);
    $inp = file_get_contents('array.json');
    $tempArray = json_decode($inp);
    print_r($tempArray);
}
  
?>