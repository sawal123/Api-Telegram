<?php

$id=$_GET['id'];
$token = "5450564272:AAFm4dkyXSq8n9tdG6FGxAC60Rlg2cdvD0E"; // token bot


$telegram_id = "1654242430";
// $telegram_id= "904725130";
$message_text = "Notifikasi Telegram Dari Sawal";


function sendMessage($telegram_id, $message_text, $token) {

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message_text);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

if($id == 1)
{
    sendMessage($telegram_id, $message_text, $token);
    echo "Pesan berhasil dikirm";
}
else
{
    echo "masukan yang lain";
}





