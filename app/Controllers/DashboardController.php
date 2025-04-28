<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function admin()
    {
        // Pastikan user sudah login dan role-nya admin
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/login'); // Kalau bukan admin, lempar ke login
        }

        $data = [
            'title' => "Admin Dashboard",
            'user'  => session()->get('username') // Ambil username dari session
        ];

        return view('dashboard/admin', $data);
    }

    public function user()
    {
        // Pastikan user sudah login dan role-nya user
        if (session()->get('role') !== 'user') {
            return redirect()->to('/login'); // Kalau bukan user, lempar ke login
        }

        $data = [
            'title' => "User Dashboard",
            'user'  => session()->get('username') // Ambil username dari session
        ];

        return view('dashboard/user', $data);
    }
}
