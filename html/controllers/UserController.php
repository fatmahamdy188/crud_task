<?php
require_once "models/User.php";

class UserController {
    private $user;

    public function __construct($db) {
        $this->user = new User($db);
    }

    public function showUsers() {
        $users = $this->user->getAllUsers();
        include "views/users.php";
    }

    public function deleteUser($id) {
        $this->user->deleteUser($id);
        header("Location: index.php");
    }

    public function updateUser($id, $name, $email) {
        $this->user->updateUser($id, $name, $email);
        header("Location: index.php");
    }
}