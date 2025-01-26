# Task3: Login and Signup System with Database Integration

This project demonstrates a simple login and signup system using HTML, CSS, PHP, and MySQL. It is designed to work with the XAMPP server. The application consists of three main pages: **Index**, **Signup**, and **Login**, along with a MySQL database for storing user data.

---

## Folder Structure

```
htdocs/
└── TASK_3/
    ├── index.html         # Main page with Signup and Login buttons
    ├── signup.html        # Signup page
    ├── login.html         # Login page
    ├── style.css          # Styles for index.html
    ├── style1.css         # Styles for login.html
    ├── style2.css         # Styles for signup.html
    ├── signup.php         # Handles user registration
    ├── login.php          # Handles user login
    ├── database_creation.sql # Creates the database and table
    ├── view_table.sql     # Views the data in the table

```

---

## Features

1.  **Welcome Page (index.html)**

    - Contains a heading `Welcome`.
    - Two buttons:
      - **Signup**: Redirects to `signup.html`.
      - **Login**: Redirects to `login.html`.

2.  **Signup Page (signup.html)**

    - Styled with `style2.css`.
    - Allows users to register by providing their `name`, `email`, and `password`.
    - Upon successful registration, displays `Registration Successful`.

3.  **Login Page (login.html)**

    - Styled with `style1.css`.
    - Allows users to log in by entering their `email` and `password`.
    - On successful login, displays `Login Successful`.

4.  **Database Integration**

    - The `database_creation.sql` script:
      - Creates a database named `task3_db`.
      - Creates a table `users` with fields for `name`, `email`, and `password`.
    - The `view_table.sql` script:
      - Allows viewing the data in the `users` table.

---

## Prerequisites

- **XAMPP Server**: Ensure XAMPP is installed and running on your system.
- **PHP and MySQL**: Included in XAMPP.

---

## Setup Instructions

1.  **Place the Folder**

    - Copy the `TASK_3` folder into the `htdocs` directory of your XAMPP installation.

2.  **Create the Database**

    - Open **phpMyAdmin** in your browser:  
      `http://localhost/phpmyadmin`
    - Import the `database_creation.sql` file to create the database and table.

3.  **Run the Application**

    - Start your XAMPP server (Apache and MySQL).
    - Navigate to the following URL:  
      `http://localhost/TASK_3/index.html`

---

## Testing the Application

1.  **Signup**

    - Click the **Signup** button on the main page.
    - Fill in the registration form and submit.
    - A success message (`Registration Successful`) will appear if the registration is completed.

2.  **Login**

    - Click the **Login** button on the main page.
    - Enter the registered email and password.
    - A success message (`Login Successful`) will appear if the credentials are correct.

---

## Note

- Ensure you are using the correct database name and table schema in the PHP scripts.
- Make sure the XAMPP server is running before testing.
- Use the `view_table.sql` script to verify that the data is being stored correctly in the database.

---
