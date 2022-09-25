<?php

require_once __DIR__ . '../../../vendor/autoload.php';
require_once __DIR__ . '../../../config/blade.php';
require_once __DIR__ . '../../../config/database.php';

if(!isset($_GET['id']))
{
    throw new Error('not found'); 
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $category = \Hillel\Models\Category::find($_GET['id']);
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location: /public/category');
}

/** @var $blade */
echo $blade->make('category/update')->render(); 