<?php
class Networking{
    function doRequest(){
       
        $ch = curl_init('https://elephant-api.herokuapp.com/elephants');
        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => TRUE
        ));
        
        // Send the request
        $response = curl_exec($ch);
    
        $json = file_get_contents("https://elephant-api.herokuapp.com/elephants");
    
        $array = json_decode($json,true);
        
        return $array;
    }
}
?>
