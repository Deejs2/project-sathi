<?php
$cookieParams = session_get_cookie_params();
session_set_cookie_params(
    $cookieParams["lifetime"],
    $cookieParams["path"],
    $cookieParams["domain"],
    $cookieParams["secure"],
    $cookieParams["httponly"]
);

//start session if not started
if (!isset($_SESSION)) {
    session_name('project_partner_session');
    session_start();
}


// Regenerate session ID to prevent session fixation
if (!isset($_SESSION['initiated'])) {
    session_regenerate_id(true);
    $_SESSION['initiated'] = true;
}

// Set session timeout duration (e.g., 1 hr)
$timeout_duration = 3600;

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    // Last request was more than $timeout_duration seconds ago
    session_unset();     // Unset $_SESSION variable for the run-time
    session_destroy();   // Destroy session data in storage
    header("Location: /auth"); // Redirect to login page
    exit();
}

// Update last activity time stamp
$_SESSION['LAST_ACTIVITY'] = time();

// Function to set a session variable
function set_session($key, $value) {
    $_SESSION[$key] = $value;
}

// Function to get a session variable
function get_session($key) {
    return $_SESSION[$key] ?? null;
}

// Function to destroy the session
function destroy_session() {
    session_unset();
    session_destroy();
}
