<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'pasiens' => $this->PasienModel->countAllResults(),
            'polis' => $this->PoliModel->countAllResults() // hitung total data
        ];

        return view('admin/dashboard/index', $data);
    }
}
