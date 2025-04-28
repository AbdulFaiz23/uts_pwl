<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= esc($title ?? 'Task Manager') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Menyertakan Header -->
  <?= $this->include('layouts/header') ?>
  
  <div class="container-fluid">
    <div class="row">
      <!-- Menyertakan Sidebar -->
      <?= $this->include('layouts/sidebar') ?>
      
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <?= $this->renderSection('content') ?>
      </main>
    </div>
  </div>

  <!-- Menyertakan Footer -->
  <?= $this->include('layouts/footer') ?>

  <!-- Menambahkan JS Bootstrap dan Popper.js di bagian footer untuk dropdown -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
 
<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales/id.js"></script>
</body>
</html>
