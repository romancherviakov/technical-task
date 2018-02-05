<?php

// setting errors reporting
define('DEVELOPMENT_MODE', true);

if (DEVELOPMENT_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}
