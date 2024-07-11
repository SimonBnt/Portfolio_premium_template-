<?php

define("mailHost", "smtp.gmail.com");

// adresse mail du site (client) depuis laquelle les mails sont envoyés grace au formulaire de contact => mail host
// p.e : adresse.mail.site.client.avec.contactForm@exemple.com => (sendTo) adresse.mail.site.client.avec.contactForm@exemple.com mais dans le mail est précisé l'adresse mail de l'utilisateur grace à la function sendMail($name, $email, $message) et l'argument "$email" => email de l'utilisateur

define("userName", "simon.be47@gmail.com");

define("password", "ynuh mfok ztmz yxyg");

define("setFrom", "simon.be47@hotmail.fr");

define("setFromName", "moderneFormTest");