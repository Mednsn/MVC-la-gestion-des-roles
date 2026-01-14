<?php
namespace App\Controllers;

use App\Core\Controller;

class FrontController extends Controller
{
    public function home()
    {
        $this->render('front/home');
    }
}
