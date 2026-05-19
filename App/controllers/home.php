<?php

class home
{
    public function index()
    {
        require_once '../app/views/home/index.php';
    }

    public function create()
    {
        echo "Day la trang tao moi cua Home";
    }

    public function login()
    {
        require_once '../app/views/home/login.php';
    }
}

?>