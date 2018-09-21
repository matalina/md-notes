<?php

namespace App\Core;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke()
    {
        return view('home');
    }
}
