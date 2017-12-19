<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return $this->render("@AdminBundle/login.html.twig");
    }
}