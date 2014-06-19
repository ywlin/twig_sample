<?php
require_once __DIR__ . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/view');

$twig = new Twig_Environment(
    $loader,
    array(
        'strict_variables' => true,
    )
);
$name = "Caroline  & \" \' < >";

$template = $twig->loadTemplate('escape.html');

echo $template->render(array(
   'username' => $name, 
));
