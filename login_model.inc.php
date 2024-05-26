<?php

declare(strict_types=1);

function get_user(object $pdo, string $username) {
    $query = "SELECT * FROM client WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_pass(PDO $pdo, string $username) {
    $query = "SELECT password FROM client WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $passResult = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($passResult) {
        return $passResult['password'];
    } else {
        return null;
    }
}
