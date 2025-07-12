<?php
namespace App\Controllers;

class HomeController {
    public function index() {
        $message = "Welcome to Legion!";
        require '../app/Views/home.php';
    }
}
