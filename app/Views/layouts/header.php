<header class="bg-white shadow-sm py-3 px-4 d-flex justify-content-between align-items-center sticky-top">
  <div class="d-flex align-items-center">
    <!-- Tombol Menu Sidebar yang lebih menonjol -->
    <button class="btn btn-primary me-3 d-md-none d-flex align-items-center justify-content-center" 
            style="width: 40px; height: 40px; border-radius: 10px;">
      <i class="fas fa-bars text-white"></i>
    </button>
    
    <!-- Judul dengan desain modern -->
    <div class="d-flex align-items-center">
      <h5 class="mb-0 fw-bold text-gray-800">Task Manager</h5>
      <span class="badge bg-primary bg-opacity-10 text-primary ms-2" style="font-size: 0.75rem;"></span>
    </div>
  </div>
  
  <!-- User Menu dengan desain premium -->
  <div class="dropdown">
    <button class="btn p-0 position-relative" data-bs-toggle="dropdown" aria-expanded="false">
      <div class="d-flex align-items-center bg-primary bg-opacity-10 px-3 py-2 rounded-pill hover-effect">
        <div class="avatar-icon me-2">
          <i class="fas fa-user-circle fs-4 text-primary"></i>
          <span class="status-indicator bg-success"></span>
        </div>
        <span class="text-primary fw-medium d-none d-sm-inline">John Doe</span>
        <i class="fas fa-chevron-down text-primary ms-2 small"></i>
      </div>
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" 
            style="font-size: 8px; padding: 3px 4px; min-width: 16px;">
        3
      </span>
    </button>
    
    <!-- Dropdown Menu dengan desain premium -->
    <ul class="dropdown-menu dropdown-menu-end shadow-lg mt-2 border-0 animate__animated animate__fadeIn" 
        style="min-width: 240px; border-radius: 12px; overflow: hidden; border: 1px solid rgba(0,0,0,0.05);">
      <!-- Header Profil tanpa gambar -->
      <li class="dropdown-header bg-primary bg-opacity-5 px-3 py-3">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0 me-3">
            <div class="avatar-placeholder rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center" 
                 style="width: 40px; height: 40px;">
              <i class="fas fa-user text-primary fs-5"></i>
              <span class="status-indicator bg-success"></span>
            </div>
          </div>
          <div class="flex-grow-1">
            <h6 class="mb-0 text-gray-800">John Doe</h6>
            <small class="text-muted">Administrator</small>
          </div>
        </div>
      </li>
      
      <li><hr class="dropdown-divider my-1" style="border-color: rgba(0,0,0,0.05);"></li>
      
      <!-- Menu Items dengan efek hover modern -->
      <li>
        <a class="dropdown-item px-3 py-2 d-flex align-items-center menu-item-hover" href="#">
          <div class="icon-wrapper bg-primary bg-opacity-10 me-3 p-2 rounded" style="min-width: 36px;">
            <i class="fas fa-user text-primary"></i>
          </div>
          <div class="flex-grow-1">
            <span class="d-block text-gray-800">Profil Saya</span>
            <small class="d-block text-muted" style="font-size: 0.75rem;">Kelola profil Anda</small>
          </div>
          <i class="fas fa-chevron-right text-muted ms-2" style="font-size: 0.75rem;"></i>
        </a>
      </li>
      
      <li>
        <a class="dropdown-item px-3 py-2 d-flex align-items-center menu-item-hover" href="#">
          <div class="icon-wrapper bg-warning bg-opacity-10 me-3 p-2 rounded" style="min-width: 36px;">
            <i class="fas fa-cog text-warning"></i>
          </div>
          <div class="flex-grow-1">
            <span class="d-block text-gray-800">Pengaturan</span>
            <small class="d-block text-muted" style="font-size: 0.75rem;">Personaliasi sistem</small>
          </div>
          <i class="fas fa-chevron-right text-muted ms-2" style="font-size: 0.75rem;"></i>
        </a>
      </li>
      
      <li>
        <a class="dropdown-item px-3 py-2 d-flex align-items-center menu-item-hover" href="#">
          <div class="icon-wrapper bg-info bg-opacity-10 me-3 p-2 rounded" style="min-width: 36px;">
            <i class="fas fa-bell text-info"></i>
          </div>
          <div class="flex-grow-1">
            <span class="d-block text-gray-800">Notifikasi</span>
            <small class="d-block text-muted" style="font-size: 0.75rem;">3 belum dibaca</small>
          </div>
          <span class="badge bg-danger ms-auto">3</span>
        </a>
      </li>
      
      <li><hr class="dropdown-divider my-1" style="border-color: rgba(0,0,0,0.05);"></li>
      
      <!-- Logout dengan efek hover yang jelas -->
      <li>
        <form action="<?= site_url('auth/logout') ?>" method="post">
          <?= csrf_field() ?>
          <button type="submit" class="dropdown-item px-3 py-2 d-flex align-items-center menu-item-hover text-danger">
            <div class="icon-wrapper bg-danger bg-opacity-10 me-3 p-2 rounded" style="min-width: 36px;">
              <i class="fas fa-sign-out-alt"></i>
            </div>
            <div class="flex-grow-1">
              <span class="d-block">Logout</span>
              <small class="d-block text-muted" style="font-size: 0.75rem;">Keluar dari sistem</small>
            </div>
            <i class="fas fa-chevron-right text-muted ms-2" style="font-size: 0.75rem;"></i>
          </button>
        </form>
      </li>
    </ul>
  </div>
</header>

<style>
  /* Custom CSS untuk tampilan premium */
  .avatar-icon {
    position: relative;
    display: inline-block;
  }
  
  .status-indicator {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    border: 2px solid white;
  }
  
  .avatar-placeholder {
    position: relative;
    background-color: #f8f9fa;
  }
  
  .hover-effect:hover {
    background-color: rgba(13, 110, 253, 0.15) !important;
    transition: all 0.3s ease;
  }
  
  .menu-item-hover:hover {
    background-color: #f8f9fa !important;
    transform: translateX(5px);
    transition: all 0.3s ease;
  }
  
  .menu-item-hover:hover .icon-wrapper {
    background-color: rgba(13, 110, 253, 0.2) !important;
    transition: all 0.3s ease;
  }
  
  .dropdown-menu {
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  }
  
  .text-gray-800 {
    color: #2d3748;
  }
  
  .icon-wrapper {
    transition: all 0.3s ease;
  }
</style>