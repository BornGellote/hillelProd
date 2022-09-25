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
    $tag = \Hillel\Models\Tag::find($_GET['id']);
    $tag->title = $_POST['title'];
    $tag->slug = $_POST['slug'];
    $tag->save();
    header('Location: /public/tag');
}

/** @var $blade */
echo $blade->make('tag/update')->render(); 