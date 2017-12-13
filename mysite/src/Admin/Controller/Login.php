<?php
namespace  Admin\Controller;

use Admin\Controller;

class Login extends Controller
{
    public function GET(){

        return $this->render('login', ['output' => 'hello world!']);
    }
}