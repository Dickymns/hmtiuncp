<?php

namespace App\Controllers;

use App\Models\AdminModel;

class AuthController extends BaseController
{
    /**
     * Menampilkan halaman login
     */
    public function login()
    {
        if (session()->get('logged_in')) {
            return redirect()->to(base_url('admin/dashboard'));
        }
        
        return view('auth/login');
    }

    /**
     * Memproses data login (POST)
     */
    public function loginPost()
    {
        $model = new AdminModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user) {
            // Menggunakan password_verify agar cocok dengan password_hash saat register
            if (password_verify($password, $user['password'])) {
                session()->set([
                    'admin_id'  => $user['id'],
                    'username'  => $user['username'],
                    'logged_in' => true
                ]);

                return redirect()->to(base_url('admin/dashboard'));
            } else {
                return redirect()->back()->with('error', 'Password yang Anda masukkan salah!');
            }
        }

        return redirect()->back()->with('error', 'Username tidak ditemukan!');
    }

    /**
     * Menampilkan halaman register
     */
    public function register()
    {
        return view('auth/register');
    }

    /**
     * Memproses data register (POST)
     */
    public function registerPost()
    {
        $model = new AdminModel();
        
        $data = [
            'username' => $this->request->getPost('username'),
            // Password di-hash agar aman dan bisa dibaca password_verify
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        if ($model->insert($data)) {
            return redirect()->to(base_url('login'))->with('success', 'Registrasi Berhasil! Silakan Login.');
        } else {
            return redirect()->back()->with('error', 'Gagal mendaftar admin baru.');
        }
    }

    /**
     * Logout dari sistem
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}