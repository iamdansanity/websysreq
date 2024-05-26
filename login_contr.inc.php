<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pwd) {
    if (empty($username) ||empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

function is_username_wrong(bool|array $result) {
    if (!$result) { //if the result is false, then we did not find the user inside the database
        return true; //if the username is wrong, or not registered
    } else {
        return false; //if we did not have a sort of error messages
    }
}

function is_password_wrong(string $pwd, string $hashedPwd) {
    return !password_verify($pwd, $hashedPwd);
}
