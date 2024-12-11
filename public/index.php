<?php

use SimpleApi\Application;
use SimpleApi\Infrastructure\Database;

include './vendor/autoload.php';

$app = new Application();

$db = new Database();
$db->pdo->query("SELECT lastname FROM employees");
$app->start();

