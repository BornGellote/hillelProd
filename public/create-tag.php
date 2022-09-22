<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/blade.php';
require_once __DIR__ . '../../config/database.php';

$title = 'Create Tag';

use Hillel\Models\Tag;

$modelTag = new Tag;
// $modelTag->title = $_POST['tag-name'];
// $modelTag->slug = $_POST['tag-slug'];
// $modelTag->save();

// $tagUpdate = Tag::find($_POST['id-update']);
// $tagUpdate->title = $_POST['tag-new-name'];
// $tagUpdate->slug = $_POST['tag-new-slug'];
// $tagUpdate->save();

// $modelTag = Tag::find($_POST['id-delete']);
// $modelTag->delete();

/** @var $blade */
echo $blade->make('pages/create-tag', compact('title', 'modelTag'))->render();