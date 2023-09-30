<?php

namespace App\Controllers;
use App\Models\MainModel;
use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function index()
    {
        return view('index.php');
    }
    public function dashboard(){
        return view('dashboard');
    }
    
    
}
