<?php

namespace App\Core;

use Illuminate\Http\Request;
use App\Pages\StorageLocationRegistry;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $locations;

    public function __construct(StorageLocationRegistry $locations)
    {
        $this->locations = $locations;
    }

    public function __invoke()
    {
        if(auth()->check()) {
            return redirect()->route('app');
        }

        return view('welcome');
    }
}
