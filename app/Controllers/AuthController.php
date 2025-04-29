<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            // Simulasi 2 user dengan password_hash
            $users = [
                [
                    'username' => 'Hanaafi',
                    'password' => '$2y$10$Pplk2zHtF0ujyo2IYI3iv.tsCPbn.TSDkuwJjVfcPUWDGmiS1v0q.', //php -r "echo password_hash('123456', PASSWORD_DEFAULT);"
                    'role' => 'admin'
                ],
                [
                    'username' => 'halo',
                    'password' => '$2y$10$XjX1x5AIcIPVE8ufeXvMDuoL4T99jhvrzuZlYYtcRtAZBARxZoFZ.', //php -r "echo password_hash('123', PASSWORD_DEFAULT);"
                    'role' => 'user'
                ]
            ];

            foreach ($users as $user) {
                if ($username == $user['username']) {
                    if (password_verify($password, $user['password'])) {
                        session()->set([
                            'username' => $user['username'],
                            'role' => $user['role'],
                            'isLoggedIn' => true
                        ]);
                        // Redirect khusus berdasarkan role
                        if ($user['role'] == 'admin') {
                            return redirect()->to('/admin');
                        } else {
                            return redirect()->to('/user');
                        }

                    } else {
                        session()->setFlashdata('failed', 'Password salah');
                        return redirect()->back();
                    }
                }
            }

            session()->setFlashdata('failed', 'Username tidak ditemukan');
            return redirect()->back();
        }

        return view('login');
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
