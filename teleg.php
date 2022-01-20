<?php
$mass = $_POST['mass'];
$token = "5184846514:AAFU7QtAId4pX1E4svo0GJvzmonmfpN9Hbs";
$chat_id = "-653199880";
$arr = array(
  'Сообщение: ' => $mass
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

