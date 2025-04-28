<nav class="sidebar bg-white border-end" style="width: 250px;">
  <div class="p-3">
    <h5 class="mb-4 text-primary">
      <i class="fas fa-tasks me-2"></i>Aplikasi Saya
    </h5>
    
    <ul class="nav flex-column">
    <li class="nav-item mb-2">
        <a class="nav-link active" href="<?= (session()->get('role') == 'admin') ? base_url('dashboard/admin') : base_url('dashboard/user') ?>">
          <i class="fas fa-home me-2"></i> Beranda
        </a>
      </li>

      <li class="nav-item mb-2">
       <a class="nav-link" href="<?= base_url('tugas') ?>">
        <i class="fas fa-list-check me-2"></i> Tugas
       </a>
    </li>


    </ul>
  </div>
</nav>

<style>
.sidebar {
  height: 100vh;
  position: fixed;
}
.nav-link {
  color: #555;
  border-radius: 5px;
  padding: 8px 12px;
}
.nav-link:hover {
  background: #f0f4ff;
}
.nav-link.active {
  background: #e0e9ff;
  color: #3a6eff;
}
</style>