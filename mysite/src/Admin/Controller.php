<?php
namespace  Admin;

class Controller extends \Controller
{
    protected function render($file, array $vars = [])
    {
        $view = new \Owl\Mvc\View(ROOT_DIR . '/src/Admin/View');

        return $view->render($file, $vars);
    }
}