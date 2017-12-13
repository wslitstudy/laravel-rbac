<?php
namespace Controller;

class Index extends \Controller
{
    public function get()
    {
        $this->response->withCookie('foo', 'bar');

        return $this->render('Index', ['output' => 'hello world!111111']);
    }
}
