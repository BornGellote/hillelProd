<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/blade.php';
require_once __DIR__ . '../../config/database.php';

$title = 'Create Category';

use Hillel\Models\Category;

$modelCat = new Category;
// $modelCat->title = 'audi test';
// $modelCat->slug = 'audi_test1';
// $modelCat->save();

// $catUpdate = Category::find(5);
// $catUpdate->title = 'audi test 5';
// $catUpdate->slug = 'audi_test5';
// $catUpdate->save();

// $catDel = Category::find(7);
// $catDel->delete();

/** @var $blade */
echo $blade->make('pages/create-tag', compact('title', 'modelCat'))->render();
