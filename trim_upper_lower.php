<?php

/*
 *  This example is showing twig Filter: trim/upper/lower
 * */

require_once dirname(__FILE__) . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(dirname(__FILE__) . '/view');
$twig = new Twig_Environment($loader, array('strict_variables' => true));

$array_data = array(
     'desc' => '  Twig is GOOD~  ',
    'desc1' => 'Twig is amazing!.',
    'desc2' => 'UPPER CASE TO LOWER CASE.',
    'desc3' => 'lower case to upper case.',
);

echo $twig->render('trim_upper_lower.html', array('data' => $array_data));
