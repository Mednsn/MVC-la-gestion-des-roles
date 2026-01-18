<?php
namespace App\Controllers;

use App\Core\Controller;

class DashboardController
{
    public function index()
    {
        require_once __DIR__ . '/../views/back/dashboard.php';

    }
    

}
