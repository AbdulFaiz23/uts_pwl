<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Daftar Tugas</h2>
        <div class="badge bg-primary text-white p-2">
            <i class="fas fa-user me-1"></i> <?= $user ?>
        </div>
    </div>
    
    <div class="alert alert-info">
        <i class="fas fa-info-circle me-2"></i> Berikut adalah daftar tugas yang perlu Anda selesaikan.
    </div>

    <div class="row mt-4">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="card-title mb-0 d-flex align-items-center">
                        <i class="fas fa-tasks text-primary me-2"></i> Daftar Tugas Anda
                    </h5>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1 fw-bold">Tugas 1</h6>
                                    <small class="text-muted">Membuat laporan penelitian</small>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-warning text-dark">Pending</span>
                                    <div class="text-muted small mt-1">
                                        <i class="far fa-clock me-1"></i> Deadline: 1 Juni 2025
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="list-group-item py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1 fw-bold">Tugas 2</h6>
                                    <small class="text-muted">Presentasi hasil analisis</small>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-info text-white">In Progress</span>
                                    <div class="text-muted small mt-1">
                                        <i class="far fa-clock me-1"></i> Deadline: 5 Juni 2025
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="list-group-item py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1 fw-bold">Tugas 3</h6>
                                    <small class="text-muted">Pengumpulan final project</small>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-secondary">Not Started</span>
                                    <div class="text-muted small mt-1">
                                        <i class="far fa-clock me-1"></i> Deadline: 10 Juni 2025
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white py-3">
                    <button class="btn btn-primary btn-sm">
                        <i class="fas fa-plus me-1"></i> Tambah Tugas
                    </button>
                    <button class="btn btn-outline-secondary btn-sm ms-2">
                        <i class="fas fa-filter me-1"></i> Filter
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-lg-8 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title d-flex align-items-center">
                        <i class="fas fa-chart-pie text-success me-2"></i> Progress Tugas
                    </h5>
                    <div class="progress mt-3" style="height: 20px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <div class="mt-3 d-flex justify-content-between small">
                        <span><span class="badge bg-success me-1"></span> Selesai (1)</span>
                        <span><span class="badge bg-warning me-1"></span> Dalam Proses (1)</span>
                        <span><span class="badge bg-secondary me-1"></span> Belum Dimulai (1)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<style>
    .card {
        border-radius: 10px;
        overflow: hidden;
    }
    .list-group-item {
        transition: all 0.3s ease;
    }
    .list-group-item:hover {
        background-color: #f8f9fa;
        transform: translateX(5px);
    }
    .progress {
        border-radius: 10px;
    }
    .progress-bar {
        font-size: 0.75rem;
        font-weight: 500;
    }
</style>
<?= $this->endSection() ?>