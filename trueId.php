<?php 

if(isset($_POST['userId'])) {
    $userId = $_POST['userId'];
    $apiUrl = "https://api.ryucodex.com/idCodm/".$userId;
    
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    $dataId = curl_exec($curl);
    curl_close($curl);
    
    print_r(urldecode($dataId));  
}

?>