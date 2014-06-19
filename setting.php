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
$array_data = array(
    'foo' => 'bar',
    'username' => 'ROCK',
    'password' => 'and ROLL',
    );

//set template variables
echo $twig->render('setting.html', $array_data);
