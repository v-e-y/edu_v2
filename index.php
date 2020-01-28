<?php declare(strict_types=1);
// Show or not errors
require_once 'errors.php';
// autoload function
require_once __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php';

$userRequest = new RequestController($_REQUEST);

echo print_r($userRequest->getRequest());




$dbConnection = new DBController(require_once 'Config/dbConfig.php');

$allNews = $dbConnection->getQuery('SELECT * FROM news');

//echo print_r($allNews);

