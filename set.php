<?php

/*
 * This example is showing how to use "set" tags in html
 * */

require_once dirname(__FILE__) . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(dirname(__FILE__) . '/view');
$twig = new Twig_Environment($loader, array('strict_variables' => true));

$members = array(
    array(
        'name' => 'shawnlin',
        'gender' => 'male',
    ),
    array(
        'name' => 'ymlin',
        'gender' => 'male',
    ),
    array(
        'name' => 'carolinesun',
        'gender' => 'female',
    )
);

echo $twig->render('set.html', array('members' => $members));
