<?php 

require_once __DIR__ . '../../vendor/autoload.php';
require_once __DIR__ . '../../config/database.php';


use Hillel\Models\Category;
use Hillel\Models\Post;
use Hillel\Models\Tag;

// $modelCat = new Category;
// $modelCat->title = 'audi test';
// $modelCat->slug = 'audi_test1';
// $modelCat->save();

// $catUpdate = Category::find(5);
// $catUpdate->title = 'audi test 5';
// $catUpdate->slug = 'audi_test5';
// $catUpdate->save();

// $catDel = Category::find(7);
// $catDel->delete();

echo '<br> table Category: <br>';
$catAll = Category::all();
foreach ($catAll as $cat)
{
   echo '$cat->title = "' . $cat->title . '" $cat->slug = "' . $cat->slug . '" <br>';
}
// $modelPost = new Post;
// $modelPost->title = 'audi test post 1';
// $modelPost->slug = 'test_post_1';
// $modelPost->body = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry';
// $modelPost->category_id = '1';
// $modelPost->save();

// $postUpdate = Post::find(3);
// $postUpdate->title = 'audi test post 44 ';
// $postUpdate->slug = 'audi_test3';
// $postUpdate->body = 'Lorem Ipsum sdf kewkelk2 3lk23nm 23m,n 23 3,m223 23m,n23';
// $postUpdate->category_id = '3';
// $postUpdate->save();

// $postDel = Post::find(7);
// $postDel->delete();

echo '<br> table Post: <br>';
$postAll = Post::all();
foreach ($postAll as $post)
{
   echo '$post->title = "' . $post->title . '" $post->slug = "' . $post->slug . '" $post->body = "' . $post->body . '" $post->category_id = "' . $post->category_id . '"' . ' $post->$tag = ';
   foreach ($post->tags as $tag){
        echo ' ' . $tag->title;
   } 
   echo '<br>'; 
}

// $modelTag = new Tag;
// $modelTag->title = 'test 0';
// $modelTag->slug = 'test_0';
// $modelTag->save();

// $tagUpdate = Tag::find(15);
// $tagUpdate->title = 'test 42';
// $tagUpdate->slug = 'audi_test42';
// $tagUpdate->save();

// $modelTag = Tag::find(4);
// $modelTag->delete();

echo '<br> table Tag: <br>';
$tagAll = Tag::all();
foreach ($tagAll as $tag)
{
   echo '$tag->title = "' . $tag->title . '" $post->slug = "' . $tag->slug . '" <br>';
} 
