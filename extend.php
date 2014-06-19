<?php
//include Twig auto-loader
require_once __DIR__ . '/vendor/autoload.php';

//template directory location
$loader = new Twig_Loader_Filesystem(__DIR__ . '/view');

//initialize Twig environment
$twig = new Twig_Environment(
    $loader,
    array(
        'strict_variables' => true,
    )
);

//set template variables
echo $twig->render('child.html');
echo $twig->render('grandchild.html');
