<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginPage extends BaseController
{
    public function login()
    {
        return view ("LoginPage/login");
    }

    public function register()
    {
        return view ("LoginPage/register");
    }

    public function newPassword()
    {
        return view ("LoginPage/newPassword");
    }
}
