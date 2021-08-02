
<?php

require __DIR__ . "/Assets/Sweetalert.php";
require __DIR__ . "/source/autoload.php";

$message = new  \Source\Support\Message();


  echo $message->warning("Essa é uma mensagem de teste do IMS");
//echo $message->info("Essa é uma mensagem de teste do IMS");
//echo $message->success("Essa é uma mensagem de teste do IMS");
//  echo $message->error("Essa é uma mensagem de teste do IMS");