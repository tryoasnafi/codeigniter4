<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $data = [];
        helper(['form', 'url']);

        $rules = [
            'email'        => 'required|valid_email',
            'password'     => [
                'rules' => 'required|min_length[8]|valid_login[email, password]',
                'errors' => [
                    'valid_login' => 'Email or Password is incorrect.'
                ],
            ],
        ];

        if ($this->request->getMethod() === 'post') {
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                // return redirect()->back()->withInput();
            } else {
                $userModel = new UserModel();
                $user = $userModel->where('email', $this->request->getVar('email'))->first();
                $this->setUserSession($user);
                return redirect()->to('/dashboard');
            }
        }

        echo view('templates/head', $data);
        echo view('login');
        echo view('templates/footer');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'full_name' => $user['full_name'],
            'email' => $user['email'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function register()
    {
        $data = [];
        helper(['form']);

        $rules = [
            'full_name'     => 'required|alpha_numeric_space|min_length[3]',
            'email'        => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'is_unique' => 'The email address is already taken. Please choose another one.'
                ],
            ],
            'password'     => 'required|min_length[8]',
            'password_confirm' => 'required_with[password]|matches[password]',
        ];

        if ($this->request->getMethod() === 'post') {
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                // return redirect()->back()->withInput();
            } else {
                $userModel = new UserModel();
                $userModel->save([
                    'full_name' => $this->request->getVar('full_name'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ]);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
            }
        }

        echo view('templates/head', $data);
        echo view('register');
        echo view('templates/footer');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }
}
