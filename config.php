<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800, //maeexpire yung session id within 30mins
    'domain' => 'localhost',
    'path' => '/', // file path that you created, kung saan lang dapat na directory mapupunta
    'secure' => true, //https ang gagamitin instead of http
    'httponly' => true, //to prevent from entering to malicious website
]);

session_start();

if (!isset($_SESSION["last_regeneration"])) {
    regenerate_session_id();
}
else {
    $interval = 60 * 30;

    if (time() - $_SESSION["last_regeneration"] >= $interval) {
        regenerate_session_id();
    }
}

function regenerate_session_id() {
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}