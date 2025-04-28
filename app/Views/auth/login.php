<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Task Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #4e73df;
      --secondary-color: #f8f9fc;
      --accent-color: #2e59d9;
    }
    
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .login-container {
      width: 100%;
      max-width: 420px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      animation: fadeIn 0.6s ease-in-out;
    }
    
    .login-header {
      background-color: var(--primary-color);
      color: white;
      padding: 1.5rem;
      text-align: center;
    }
    
    .login-body {
      padding: 2rem;
    }
    
    .form-control {
      height: 50px;
      border-radius: 8px;
      border: 1px solid #ddd;
      padding-left: 45px;
    }
    
    .form-control:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
    }
    
    .input-group-text {
      position: absolute;
      z-index: 10;
      height: 50px;
      background: transparent;
      border: none;
      color: #6c757d;
    }
    
    .btn-login {
      background-color: var(--primary-color);
      border: none;
      height: 50px;
      font-weight: 600;
      border-radius: 8px;
      transition: all 0.3s;
    }
    
    .btn-login:hover {
      background-color: var(--accent-color);
      transform: translateY(-2px);
    }
    
    .social-login-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      font-weight: 500;
      transition: all 0.3s;
    }
    
    .footer-links {
      text-align: center;
      margin-top: 1.5rem;
      font-size: 0.9rem;
    }
    
    .footer-links a {
      color: var(--primary-color);
      text-decoration: none;
      font-weight: 500;
    }
    
    .alternative-login {
      text-align: center;
      margin: 1.5rem 0;
      position: relative;
      color: #6c757d;
    }
    
    .alternative-login::before,
    .alternative-login::after {
      content: "";
      position: absolute;
      top: 50%;
      width: 30%;
      height: 1px;
      background-color: #dee2e6;
    }
    
    .alternative-login::before {
      left: 0;
    }
    
    .alternative-login::after {
      right: 0;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-header">
      <h2><i class="fas fa-tasks me-2"></i>Task Manager</h2>
      <p class="mb-0">Masuk untuk mengakses dashboard Anda</p>
    </div>
    
    <div class="login-body">
      <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="fas fa-exclamation-circle me-2"></i>
          <?= session()->getFlashdata('error') ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
      
      <form method="post" action="/login">
        <div class="mb-3 position-relative">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
          <input type="text" name="username" class="form-control ps-5" id="username" placeholder="Username" required>
        </div>
        
        <div class="mb-4 position-relative">
          <span class="input-group-text"><i class="fas fa-lock"></i></span>
          <input type="password" name="password" class="form-control ps-5" id="password" placeholder="Password" required>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember">
            <label class="form-check-label" for="remember">Ingat saya</label>
          </div>
          <a href="#" class="text-decoration-none">Lupa password?</a>
        </div>
        
        <button class="w-100 btn btn-lg btn-primary btn-login mb-3" type="submit">
          <i class="fas fa-sign-in-alt me-2"></i>Login
        </button>
        
        
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>