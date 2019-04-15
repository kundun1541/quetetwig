<?php
/**
 * Created by PhpStorm.
 * User: Sylvain
 * Date: 2019-04-15
 * Time: 11:07
 */

require '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('/Users/Sylvain/PhpstormProjects/MyFirstPHPProject/quetetwig/src/views');
$twig = new \Twig\Environment($loader);


echo $twig->render('hello.html.twig', ['products'=>['product1', 'product2', 'product3', 'product4', 'product5']]);



