<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require_once __DIR__ . '/../src/View/navbar.html.twig';
require_once __DIR__ . '/../src/View/_footer.html.twig';
$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);