<?php
//Read variables sent via POST from AT gateway
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];


if ($text == ""){
    $response = "CON what would you want to check \n";
    $response = "1.My Account \n";
    $response = "2. My PhoneNumber";
}elseif ($text == "1") {
    $response = "CON choose the information you want to veiw \n";
    $response = "1.Account Number \n";
    $response = "2.Account Balance";
}elseif ($text == "2") {
    $response = "END Your phone number is ".$phoneNumber ;
}elseif ($text == "1*1") {
    # static account number 
    $accountNo = "WERT3456FGH";
    $response = "END Your account number is ".$accountNo;

}elseif ($text == "1*2") {
    # static account balance 
    $balance = "sh. 15000";
    $response = "END Your account balance is ".$balance;

}
header('Content-type:text/plain');
echo $response;
?> 