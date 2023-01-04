<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class PagesController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    
}
