<?php
namespace Controller;

class Phpinfo extends \Controller
{
    public function get()
    {
        if (!DEBUG) {
            throw \Owl\Http\Exception::factory(404);
        }

        ob_start();
        phpinfo();

        return ob_get_clean();
    }
}
