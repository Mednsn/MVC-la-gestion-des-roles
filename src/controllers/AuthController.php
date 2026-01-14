<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Session;

class AuthController extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Session::set('user', [
                'email' => $_POST['email'],
                'role'  => 'user'
            ]);
            header('Location: index.php?page=home');
        }

        $this->render('auth/login');
    }
}
