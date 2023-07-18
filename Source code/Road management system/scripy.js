const form = document.getElementById('login-form');

form.addEventListener('submit', function(event) {
  event.preventDefault();
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  // Perform validation and authentication logic here
  // Redirect to the main application page if login is successful
  window.location.href = 'main.html';
});
