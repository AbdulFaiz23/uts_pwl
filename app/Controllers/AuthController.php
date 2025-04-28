<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $users = [
            'admin' => [
                'password' => password_hash('admin123', PASSWORD_DEFAULT), //user admin pw admin 123
                'role' => 'admin'
            ],
            'user' => [
                'password' => password_hash('user123', PASSWORD_DEFAULT), //username user pw user 123
                'role' => 'user'
            ]
        ];

        if (isset($users[$username]) && password_verify($password, $users[$username]['password'])) {
            $session->set([
                'username' => $username,
                'role' => $users[$username]['role'],
                'logged_in' => true
            ]);

            return redirect()->to('/' . $users[$username]['role']);
        }

        return redirect()->back()->with('error', 'Login gagal');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
