<?php

namespace App\Controllers;
use App\Models\MainModel;
use App\Controllers\BaseController;
use App\Models\AuthModel;

class AuthController extends BaseController
{
    
    
    public function signin(){

        $user_info = new AuthModel();
        $data= [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];
     
        $user_info->save($data);

        
        return view('index');

    }

    public function login(){

        $user_info = new AuthModel();

        $session = session();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $user_info->where('username', $username)->first();

        if ($user && $password) {
            
          
            return redirect()->to('dashboard');
        } else {
            // Invalid credentials, show error
            return redirect()->to('login')->with('error', 'Invalid login credentials');
        }

    }
}
