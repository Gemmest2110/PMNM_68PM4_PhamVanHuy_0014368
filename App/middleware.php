<?php

class middleware
{
    public function checklogin()
    {
        $url = $_GET['url'] ?? '';
        $url = trim($url, '/');
        $url = strtolower($url);

        $publicPages = [
            'home/login',
            'auth/login'
        ];

        if (!isset($_SESSION['username']) && !in_array($url, $publicPages)) {
            header('Location: ' . BASE_URL . '/home/login');
            exit();
        }
    }
}

?>