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

//generate data
$num = rand (0,30);
$div = ($num % 2);

$template = $twig->loadTemplate('if_else_endif.html');

//set template variables
echo $template->render(array(
    'num' => $num,
    'div' => $div,
));
