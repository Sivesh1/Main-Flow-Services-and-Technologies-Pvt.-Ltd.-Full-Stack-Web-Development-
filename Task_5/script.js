document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("login-form");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const emailOrUsername = document.getElementById("email_or_username").value.trim();
        const password = document.getElementById("password").value.trim();

        if (!emailOrUsername || !password) {
            alert("All fields are required!");
            return;
        }

        alert(`Login successful!\nEmail/Username: ${emailOrUsername}`);
    });
});