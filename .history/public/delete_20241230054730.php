<?php

require_once '../app/Database.php';

use App\Database;

$database = new Database();
header('Location: index.php');