<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/blade.php';
require_once __DIR__ . '../../config/database.php';

$title = 'Tags List';
$categories = \Hillel\Models\Category::all();

/** @var $blade */
echo $blade->make('pages/list-categories', compact('title', 'categories'))->render();