<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Tugas extends BaseController
{
    public function index()
    {
        $data = [
            'user' => session()->get('nama') // atau nama user yang login
        ];
        return view('tugas/index', $data);
    }
    // app/Controllers/TugasController.php
public function getKalenderTugas()
{
    $tugasModel = new \App\Models\TugasModel();
    
    // Ambil tugas berdasarkan user yang login
    $userId = session()->get('user_id');
    $tugas = $tugasModel->select('tugas.*, proyek.nama_proyek')
                       ->join('proyek', 'proyek.id = tugas.proyek_id', 'left')
                       ->where('tugas.user_id', $userId)
                       ->orWhere('proyek.user_id', $userId)
                       ->findAll();
    
    return $this->response->setJSON($tugas);
}
}
