<?php


/**
 * @var Composer\Autoload\ClassLoader
 */
require __DIR__.'/../vendor/autoload.php';

$config = []; // read config

$application = new \CawaKharkov\Application\Application();
$application->boot($config);

// return application response
echo $application->run();

