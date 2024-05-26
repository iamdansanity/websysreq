<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $DOB = $_POST["DOB"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        // ERROR HANDLERS
        $errors = [];

        if (is_input_empty($fname, $lname, $DOB, $contact, $email, $username, $pwd)) {
            $errors["empty_input"] = "Fill in all fields!";
        } else {
            if (is_email_invalid($email)) {
                $errors["invalid_email"] = "Invalid email used!";
            }
            if (is_email_registered($pdo, $email)) {
                $errors["email_used"] = "Email already registered!";
            }
            if (get_username($pdo, $username)) {
                $errors["username_taken"] = "Username already taken!";
            }
            
        }
        

        require_once "config.php";

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../signup.php");
            die();
        }

        set_user($pdo, $fname, $lname, $DOB, $contact, $email, $username, $pwd);

        header("Location: ../halls.php?signup=success");
        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../halls.php");
    die();
}