<?php

include_once '../vendor/autoload.php';

use Corviz\Crow\Crow;

Crow::setDefaultPath('../views');

Crow::render('index');
