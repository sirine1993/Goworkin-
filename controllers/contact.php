<?php
echo 'coucou contact';
require_once 'vendor/autoload.php';
// require_once ('models/request.php');
require_once ('models/request.php');
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array('cache' => false));
echo $twig->render('contact.html');
?>