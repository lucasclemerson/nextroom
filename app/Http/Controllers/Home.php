<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index ()
    {
        return view('home.home', [
            'title' => 'Página inicial',
            'LastUpdated' => '2024-06-10',
            'VersionPHP' => phpversion(),
            'VersionLaravel' => app()->version(),
        ]);
    }
}
