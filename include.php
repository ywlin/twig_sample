<?php

/*
 * This example is showing how to include header/footer via "include" tags in html
 * */

require_once dirname(__FILE__) . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(dirname(__FILE__) . '/view');
$twig = new Twig_Environment($loader, array('strict_variables' => true));

$array_data = array(
    'name' => 'shawnlin',
);

echo $twig->render('include.html', $array_data);
