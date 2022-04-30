<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function change()
    {
        return view('change');
    }
    public function index()
    {   
        $user = auth()->user();
        $context = [ 
            'user' => $user
        ];
        return view('home', $context);
    }
}
