<?php

require_once __DIR__ . '../../../vendor/autoload.php';
require_once __DIR__ . '../../../config/blade.php';
require_once __DIR__ . '../../../config/database.php';

$title = 'Tags List';
$tags = \Hillel\Models\Tag::all();

/** @var $blade */
echo $blade->make('tag/index', compact('title', 'tags'))->render();