<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class middleware
{
    public $publicPages = [
        '/68PM4_PhamVanHuy_0014368/public/home/login',
        '/68PM4_PhamVanHuy_0014368/public/auth/login',
        '/68PM4_PhamVanHuy_0014368/public/auth/logout'
    ];

    public function checklogin()
    {
        $currentUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (!isset($_SESSION['username']) && !in_array($currentUrl, $this->publicPages)) {
            header('Location: /68PM4_PhamVanHuy_0014368/public/home/login');
            exit();
        }
    }
}

?>