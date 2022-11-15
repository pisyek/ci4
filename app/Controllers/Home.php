<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $a = 100 - 1;

        return view('welcome_message', compact('a'));
    }

    public function test()
    {
        return "test route";
    }
}
