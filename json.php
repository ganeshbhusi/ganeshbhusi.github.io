<?php
$data=array();

if(isset($_GET["name"])=="shiva"){
    $data["username"] = "shiva140191";
    $data["password"] = "shiva123";
    $data["firstname"] = "Shiva";
    $data["lastname"] = "Thota";
    $data["Hobbies"] = "Coding";
    $data["email"] = "shiva.thota@vedantu.com";
    $data["state"] = "Andhra Pradesh";
    $data["college"] = "RGUKT Nuzvid";
    $data["logo"] = "https://images.yourstory.com/cs/images/companies/logosC2451575976810734png";
}else if(isset($_GET["name"])=="ganeshbhusi"){
    $data["username"] = "ganeshbhusi";
    $data["password"] = "ganesh123";
    $data["firstname"] = "Ganesh";
    $data["lastname"] = "Bhusi";
    $data["Hobbies"] = "Sleep, Web Surfing";
    $data["email"] = "ganesh.bhusi@vedantu.com";
    $data["state"] = "Andhra Pradesh";
    $data["college"] = "RGUKT Nuzvid";
    $data["logo"] = "https://images.yourstory.com/cs/images/companies/logosC2451575976810734png";
}else{
    $data["message"]="Go to Hell, Your data has been lost!!!!";
}

$return = array();
$return["userdata"] = $data;
echo json_encode($return);
?>