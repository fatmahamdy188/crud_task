<?php
require_once "controllers/UserController.php";
require_once "config/db.php";

$controller = new UserController($pdo);

if (isset($_GET['delete'])) {
    $controller->deleteUser($_GET['delete']);
} else {
    $controller->showUsers();
}