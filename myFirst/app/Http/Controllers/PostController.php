<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function saidou()
    {
        return view('saidou');
    }

    public function ndao()
    {
        return view('adama');
    }
}
