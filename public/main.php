<?php
$config = require "database\config.php";
require "database\Сonection.php";
require "Controllers\AddController.php";
require "Models\AddModel.php";
require "Controllers\ReadController.php";
require "Models\ReadModel.php";

$pdo = Connection::make($config['database']);
$modelAdd = new AddModel($pdo);
$modelRead = new ReadModel($pdo);
$controllerRead = new ReadController($modelRead);
$controllerAdd = new AddController($modelAdd);
$messages = $controllerRead->getMassages();
$controllerAdd->postTransaction();
?>