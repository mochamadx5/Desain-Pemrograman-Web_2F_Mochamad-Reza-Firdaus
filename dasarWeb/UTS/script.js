// tampilkan password
const togglePassword = document.querySelector('#showPassword');
const passwordInput = document.querySelector('#password');

togglePassword.addEventListener('change', function() {
  passwordInput.type = this.checked ? 'text' : 'password';
});

// Login ke Beranda
document.getElementById('loginBtn').addEventListener('click', function() {
  const username = document.getElementById('username').value.trim();
  const password = document.getElementById('password').value.trim();

  if (username === '244107020104' && password === 'TI-2F') {
    window.location.href = 'beranda.html';
  } else {
    alert('Username dan Password tidak ditemukan');
    return; 
  }
});