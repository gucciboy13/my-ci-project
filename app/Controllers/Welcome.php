<?php

namespace App\Controllers;

class Welcome extends BaseController
{
    public function hello()
    {
        return view('hello_message');
    }
}