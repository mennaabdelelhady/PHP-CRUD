<?php

require_once '../app/Database.php';

use App\Database;

$database = new Database();

$id = $_GET['id'] ?? null;
header('Location: index.php');