<?php

require __DIR__ . "/external/autoload.php";

use Notification\Email;


$newEmail = new Email;
$newEmail->sendMail("Assunto", "<p>teste</p>", "contato@teste.com", "Iuri", "enviar@teste.com", "Jose");

var_dump($newEmail);