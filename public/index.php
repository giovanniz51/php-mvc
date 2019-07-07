<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require_once __DIR__ . '/../bootstrap/init.php';

$category = Capsule::table("categories")->get();
