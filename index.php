<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

use Todo\Models\Task;

require 'vendor/autoload.php';

$task =new Task;
$task->setDescription('Learn oop');
$task->setDue(new DateTime(' + 2 days'));

var_dump($task);