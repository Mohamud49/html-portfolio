<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('./uploads/background-logo.png') no-repeat center center fixed;
      background-size: cover;
      position: relative;
    }
    body::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 0;
    }
    .bg-blur {
      backdrop-filter: blur(12px);
      background-color: rgba(0, 0, 0, 0.6);
      border-radius: 10px;
      padding: 2rem;
      position: relative;
      z-index: 1;
    }
    .form-control, .btn, .form-label {
      border-radius: 5px;
    }
    .input-group-text {
      cursor: pointer;
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">
  <div class="bg-blur text-white w-100" style="max-width: 400px;">
    <h4 class="text-center mb-4">Login</h4>
    <?php if (!empty($_SESSION['toast'])): ?>
      <div class="alert <?= $_SESSION['toast_type'] ?? 'alert-danger' ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['toast']; unset($_SESSION['toast'], $_SESSION['toast_type']); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>


    <form method="POST" action="auth.php" id="loginForm">
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required autofocus>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <div class="input-group">
          <input type="password" name="password" id="password" class="form-control" required>
          <span class="input-group-text" onclick="togglePassword()">👁️</span>
        </div>
      </div>
        <!-- Google reCAPTCHA -->
           <!-- reCAPTCHA with callback -->
  <div class="g-recaptcha"
       data-sitekey="6LdcgDsrAAAAAAzDUY-QYrfVnLskTvseR2BZ2W7j"
       data-callback="recaptchaVerified"
       data-expired-callback="recaptchaExpired">
  </div>
      <button type="submit" class="btn btn-light w-100"id="loginBtn" disabled>Login</button>
    </form>
  </div>

  <script>
    function togglePassword() {
      const pw = document.getElementById('password');
      pw.type = pw.type === 'password' ? 'text' : 'password';
    }


    // recaptcha
      // Called when CAPTCHA is successfully completed
  function recaptchaVerified() {
    document.getElementById('loginBtn').disabled = false;
  }

  // Optional: Re-disable button if CAPTCHA expires
  function recaptchaExpired() {
    document.getElementById('loginBtn').disabled = true;
  }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Load reCAPTCHA script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
