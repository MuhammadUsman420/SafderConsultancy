<?php

if(isset($_POST["submit"])){

    $url= "https://script.google.com/macros/s/AKfycbxoXL2VjdLlERXcMS-gwdcSJo4GeAA3P35xofBge-cvdJF1yTUPPWvZjSjG6Mja0JHE-w/exec"
    $ch= curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => http_build_query([
            "recipient" => $_POST['email'],
            "name" => $_POST['name'],
            "message" => $_POST['message'],
            "comments" => $_POST['comments']

        ])
        ]);

        $result = curl_exec($ch);
        echo $result; 
}

?>
