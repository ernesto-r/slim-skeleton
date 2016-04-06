<?php

require __DIR__ . '/../vendor/autoload.php';
$settings = require __DIR__.'/../app/settings.php';
$app = new \Slim\App($settings);


require __DIR__.'/dependencies.php';
require 'routes.php';
