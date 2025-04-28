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
        $role = $arguments[0]; // 'admin' atau 'user'

        if (!$session->get('logged_in') || $session->get('role') !== $role) {
            return redirect()->to('/' . $session->get('role'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}
