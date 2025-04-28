<?php
$password = 'admin123'; // Ganti sesuai password yang mau kamu hash
echo password_hash($password, PASSWORD_DEFAULT);
?>
