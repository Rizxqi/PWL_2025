<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        return "Name: John Doe <br> NIM: 12345678";
    }
}
