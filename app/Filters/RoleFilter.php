<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Cek apakah user sudah login
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // Ambil role yang sedang login
        $role = $session->get('role');

        // Cek akses berdasarkan argument filter
        if ($arguments) {
            // Misal $arguments = ['admin'] atau ['user']
            if (!in_array($role, $arguments)) {
                // Kalau role tidak sesuai, redirect ke dashboard sesuai role
                return redirect()->to("/" . $role); // misal /admin atau /user
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak perlu digunakan di sini
    }
}
