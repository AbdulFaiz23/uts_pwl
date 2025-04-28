<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="dashboard-content p-4">
  <!-- Bagian Header dengan Sambutan Pengguna -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <div>
      <h4 class="mb-0">Selamat datang kembali, <?= $user ?>! <span class="wave-emoji">👋</span></h4>
      <small class="text-muted">Ini yang terjadi dengan tugas Anda hari ini</small>
    </div>
  </div>
  
  <!-- Kartu Statistik dengan Indikator Progress -->
  <div class="row mb-4">
    <div class="col-md-4 mb-3 mb-md-0">
      <div class="card bg-primary bg-opacity-10 border-primary border-opacity-25">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-start">
            <div>
              <h6 class="card-title text-muted">Tugas Aktif</h6>
              <h3 class="mb-2">5</h3>
              <div class="progress" style="height: 6px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="avatar bg-primary text-white rounded-circle p-3">
              <i class="fas fa-tasks"></i>
            </div>
          </div>
          <a href="#" class="small text-primary text-decoration-none d-block mt-2">Lihat semua <i class="fas fa-arrow-right ms-1"></i></a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3 mb-md-0">
      <div class="card bg-success bg-opacity-10 border-success border-opacity-25">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-start">
            <div>
              <h6 class="card-title text-muted">Tugas Selesai</h6>
              <h3 class="mb-2">12</h3>
              <div class="progress" style="height: 6px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="avatar bg-success text-white rounded-circle p-3">
              <i class="fas fa-check-circle"></i>
            </div>
          </div>
          <a href="#" class="small text-success text-decoration-none d-block mt-2">Lihat riwayat <i class="fas fa-arrow-right ms-1"></i></a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-warning bg-opacity-10 border-warning border-opacity-25">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-start">
            <div>
              <h6 class="card-title text-muted">Tugas Mendatang</h6>
              <h3 class="mb-2">3</h3>
              <div class="progress" style="height: 6px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="avatar bg-warning text-white rounded-circle p-3">
              <i class="fas fa-calendar-alt"></i>
            </div>
          </div>
          <a href="#" class="small text-warning text-decoration-none d-block mt-2">Lihat kalender <i class="fas fa-arrow-right ms-1"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Tugas Terkini dengan Sistem Prioritas -->
  <div class="card border-0 shadow-sm">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="card-title mb-0">Tugas Terkini</h5>
        <div>
          <a href="/tugas" class="small text-decoration-none me-3">Lihat Semua</a>
        </div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="table-light">
            <tr>
              <th>Nama Tugas</th>
              <th>Prioritas</th>
              <th>Status</th>
              <th>Deadline</th>
              <th>Tim</th>
              <th class="text-end">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar bg-primary text-white rounded-circle me-2" style="width:30px;height:30px;display:flex;align-items:center;justify-content:center;">
                    <i class="fas fa-file-alt"></i>
                  </div>
                  <div>
                    <div>Laporan Bulanan</div>
                    <small class="text-muted">Proyek Keuangan</small>
                  </div>
                </div>
              </td>
              <td>
                <span class="badge bg-danger bg-opacity-10 text-danger">
                  <i class="fas fa-exclamation-circle me-1"></i> Tinggi
                </span>
              </td>
              <td><span class="badge bg-warning bg-opacity-10 text-warning">Dalam Proses</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <i class="far fa-calendar-alt me-1 text-muted"></i>
                  <span>15 Jun 2025</span>
                </div>
              </td>
              <td>
                <div class="avatar-group">
                  <span class="avatar avatar-xs bg-info text-white rounded-circle">A</span>
                  <span class="avatar avatar-xs bg-success text-white rounded-circle">B</span>
                  <span class="avatar avatar-xs bg-warning text-white rounded-circle">+2</span>
                </div>
              </td>
              <td class="text-end">
                <button class="btn btn-sm btn-outline-primary me-1">Detail</button>
                <button class="btn btn-sm btn-outline-secondary">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar bg-success text-white rounded-circle me-2" style="width:30px;height:30px;display:flex;align-items:center;justify-content:center;">
                    <i class="fas fa-chart-pie"></i>
                  </div>
                  <div>
                    <div>Analisis Data</div>
                    <small class="text-muted">Proyek Pemasaran</small>
                  </div>
                </div>
              </td>
              <td>
                <span class="badge bg-warning bg-opacity-10 text-warning">
                  <i class="fas fa-info-circle me-1"></i> Sedang
                </span>
              </td>
              <td><span class="badge bg-success bg-opacity-10 text-success">Selesai</span></td>
              <td>
                <div class="d-flex align-items-center">
                  <i class="far fa-calendar-alt me-1 text-muted"></i>
                  <span>10 Jun 2025</span>
                </div>
              </td>
              <td>
                <div class="avatar-group">
                  <span class="avatar avatar-xs bg-primary text-white rounded-circle">C</span>
                </div>
              </td>
              <td class="text-end">
                <button class="btn btn-sm btn-outline-primary me-1">Detail</button>
                <button class="btn btn-sm btn-outline-secondary">
                  <i class="fas fa-ellipsis-v"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- Tidak ada script yang diperlukan -->
<?= $this->endSection() ?>