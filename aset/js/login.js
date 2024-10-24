document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    // Perform your login logic here (e.g., API call)

    console.log('Email:', email);
    console.log('Password:', password);

    // Example: Clear the form after submission
    this.reset();
});
