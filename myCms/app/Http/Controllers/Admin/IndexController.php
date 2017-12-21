<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\AdminExption;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        throw new AdminExption('admin error');
    }
}