<?php

require __DIR__ . "/core/Application.php";


spl_autoload_register(function ($class) {
    if (strpos($class, "Controller")) {
        $base_path = __DIR__ . "/Controllers/";
    }
    else {
        $base_path = __DIR__ . "/core/";
    }
    $extension = ".php";
    $full_path = $base_path . $class . $extension;
    if (!file_exists($full_path)) {
        return false;
    }
    else {
        include_once $full_path;
    }
});




$app = new Application();


$app->router->get("/", [IndexController::class, "index"]);

$app->router->get("/about", [AboutController::class, "about"]);

$app->run();
