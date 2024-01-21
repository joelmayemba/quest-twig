<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new \Twig\Environment($loader);

$twig->addFunction(new \Twig\TwigFunction('dump', function ($var) {
    return var_dump($var);
}));

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

echo $twig->render('products.html.twig', ['products' => $products]);
