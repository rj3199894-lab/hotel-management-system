<?php

// Authentication Functions

// Function to register a new user
function registerUser($username, $password) {
    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    // Code to insert the username and hashed password to the database
    // e.g. SQL query
}

// Function to log in a user
function loginUser($username, $password) {
    // Code to retrieve the hashed password from the database
    // e.g. SQL query
    
    // Verify the password
    if (password_verify($password, $hashedPassword)) {
        // Successful login actions
    } else {
        // Handle login failure
    }
}

// Function to log out the user
function logoutUser() {
    // Code to destroy the session
}

// Function to check if the user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

?>