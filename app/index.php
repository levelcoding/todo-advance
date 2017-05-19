<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Todo\Models\Task;

require 'vendor/autoload.php';

$task =new Task;


var_dump($task);