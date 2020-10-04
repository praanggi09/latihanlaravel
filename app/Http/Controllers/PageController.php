<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    Public function home()
    {
        return 'home';
    }

    Public function status()
    {
        return 'ok';
    }
}
