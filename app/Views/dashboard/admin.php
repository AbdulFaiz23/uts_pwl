<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>



<div class="dashboard-content p-4">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
    <h4 class="mb-0">Dashboard <?= $user ?></h4> <span class="wave-emoji">👋</span></h4> <!-- Menampilkan nama admin -->
      <small class="text-muted">Ringkasan aktivitas sistem</small>
    </div>
    <button class="btn btn-primary">
      <i class="fas fa-plus me-2"></i>Tambah Baru
    </button>
  </div>
  
  <!-- Card Stats -->
  <div class="row mb-4">
    <div class="col-md-3">
      <div class="card bg-primary text-white">
        <div class="card-body">
          <h6 class="card-title">Total Pengguna</h6>
          <h3 class="mb-0">42</h3>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-success text-white">
        <div class="card-body">
          <h6 class="card-title">Aktivitas Hari Ini</h6>
          <h3 class="mb-0">18</h3>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-warning text-dark">
        <div class="card-body">
          <h6 class="card-title">Tugas Baru</h6>
          <h3 class="mb-0">7</h3>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-info text-white">
        <div class="card-body">
          <h6 class="card-title">Proyek Aktif</h6>
          <h3 class="mb-0">5</h3>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Activity Table -->
  <div class="card border-0 shadow-sm">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="card-title mb-0">Aktivitas Terkini</h5>
        <a href="#" class="small text-decoration-none">Lihat Semua</a>
      </div>
      
      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="table-light">
            <tr>
              <th>Pengguna</th>
              <th>Aktivitas</th>
              <th>Waktu</th>
              <th class="text-end">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar bg-primary text-white rounded-circle me-2" style="width:30px;height:30px;display:flex;align-items:center;justify-content:center;">B</div>
                  Budi Santoso
                </div>
              </td>
              <td>Menyelesaikan tugas</td>
              <td><span class="badge bg-light text-dark">10 menit lalu</span></td>
              <td class="text-end">
                <button class="btn btn-sm btn-outline-primary">Detail</button>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar bg-success text-white rounded-circle me-2" style="width:30px;height:30px;display:flex;align-items:center;justify-content:center;">A</div>
                  Ani Wijaya
                </div>
              </td>
              <td>Membuat proyek baru</td>
              <td><span class="badge bg-light text-dark">1 jam lalu</span></td>
              <td class="text-end">
                <button class="btn btn-sm btn-outline-primary">Detail</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>