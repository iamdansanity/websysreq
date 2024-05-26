<?php

declare(strict_types=1);

function is_input_empty(string $fname, string $lname, string $DOB, string $contact, string $email, string $username, string $pwd) {
    if (empty($fname) || empty($lname) || empty($DOB) || empty($contact) || empty($email) || empty($username) ||empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

function is_email_invalid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_email_registered(object $pdo, string $email) {
    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

/* function create_customer(object $pdo, string $fullname, string $contactno, string $email) {
    set_user($pdo, $fullname, $contactno, $email);
} */

/* function create_book(object $pdo, string $inputdate, string $timein, string $timeout) {
    set_date($pdo, $inputdate, $timein, $timeout);
} */

