<?php

$router = new AltoRouter();

$router->map("GET", "/php-mvc/public/", "App\Controllers\IndexController@show", "home");
