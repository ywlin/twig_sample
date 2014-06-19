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
$item1 = array(
    'eye of newt',
    'wing of bat',
    'leg of frog',
    'hair of beast'
);

$item2 = array(
    '2eye of newt',
    '2wing of bat',
    '2leg of frog',
    '2hair of beast'
);

$array_data = array(
    'item1' => $item1,
    'item2' => $item2,
);

//set template variables
echo $twig->render('loop.html', $array_data);
