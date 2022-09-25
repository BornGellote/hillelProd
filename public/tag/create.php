<?php

require_once __DIR__ . '../../../vendor/autoload.php';
require_once __DIR__ . '../../../config/blade.php';
require_once __DIR__ . '../../../config/database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $category = new \Hillel\Models\Tag();
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location: /public/tag');
}

/** @var $blade */
echo $blade->make('tag/create')->render();