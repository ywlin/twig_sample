<?php

/*
 * This example is showing how to implement PHP sprintf tags in html
 * */

require_once dirname(__FILE__) . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(dirname(__FILE__) . '/view');
$twig = new Twig_Environment($loader, array('strict_variables' => true));

$array_data = array(
    'name' => 'shawnlin',
    'desc' => 'I like KKBOX, I am a %s',
);

echo $twig->render('format.html', array('data' => $array_data));
