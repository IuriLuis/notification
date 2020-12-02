<?php

require __DIR__ . "/../external/autoload.php";

use Notification\Email;


$newEmail = new Email("2", "mail.teste.com", "sender@teste.com", "teste123", "tls", "587", "teste@teste.com",
    "equipe teste");
$newEmail->sendMail("Assunto", "<p>teste</p>", "contato@teste.com", "Iuri", "enviar@teste.com", "Jose");

var_dump($newEmail);