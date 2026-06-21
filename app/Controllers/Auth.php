<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    /**
     * Halaman Login
     */
    public function login()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        }

        return view('auth/login');
    }

    /**
     * Halaman Register
     */
    public function register()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        }

        return view('auth/register');
    }

    /**
     * Proses Register
     */
    public function processRegister()
    {
        $userModel = new UserModel();

        $name = trim($this->request->getPost('name'));
        $email = trim($this->request->getPost('email'));
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirm_password');

        // Nama kosong
        if (empty($name)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Nama wajib diisi');
        }

        // Email kosong
        if (empty($email)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email wajib diisi');
        }

        // Format email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Format email tidak valid');
        }

        // Email sudah ada
        $existingUser = $userModel
            ->where('email', $email)
            ->first();

        if ($existingUser) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email sudah digunakan');
        }

        // Password kosong
        if (empty($password)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Password wajib diisi');
        }

        // Minimal password
        if (strlen($password) < 8) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Password minimal 8 karakter');
        }

        // Confirm password
        if ($password !== $confirmPassword) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Konfirmasi password tidak cocok');
        }

        // Simpan user
        dd($name, $email, $password);
        $insert = $userModel->insert([
            'name'      => $name,
            'email'     => $email,
            'password'  => password_hash(
                $password,
                PASSWORD_DEFAULT
            )
        ]);

        if (!$insert) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal menyimpan data');
        }

        return redirect()
            ->to('/login')
            ->with(
                'success',
                'Registrasi berhasil, silakan login'
            );
    }

    /**
     * Proses Login
     */
    public function processLogin()
    {
        $userModel = new UserModel();

        $email = trim($this->request->getPost('email'));
        $password = $this->request->getPost('password');

        // Email kosong
        if (empty($email)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email wajib diisi');
        }

        // Password kosong
        if (empty($password)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Password wajib diisi');
        }

        // Cari user
        $user = $userModel
            ->where('email', $email)
            ->first();

        // Email tidak ditemukan
        if (!$user) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email tidak terdaftar');
        }

        // Password salah
        if (!password_verify(
            $password,
            $user['password']
        )) {

            return redirect()->back()
                ->withInput()
                ->with(
                    'error',
                    'Password yang Anda masukkan salah'
                );
        }

        // Simpan session
        session()->set([
            'user_id'   => $user['id'],
            'name'      => $user['name'],
            'email'     => $user['email'],
            'logged_in' => true
        ]);
        // Redirect ke Home
        return redirect()->to('/');
    }

    /**
     * Logout
     */
    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }
}