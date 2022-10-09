<?php
namespace Hillel\Controllers;

use Hillel\Models\Post;
use Hillel\Models\User;
use Hillel\Models\Category;
use Hillel\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class PostController
{
    public function index()
    {
        $posts = Post::all();
        return view('post/index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post/show', compact('post'));
    }

    public function create()
    {
        
        $category = new Category();
        $tag = new Tag();
        $users = User::all();
        // $post = new Post();
        $posts = Post::all();
        return view('post/from', compact('posts', 'users', 'tag', 'category'));
    }

    public function store()
    {
        $data = request()->all();

        $validator = validator()->make($data, [
            'title' => [
                'required',
                'unique:post,title',
                'min:5',
            ],
            'description' => ['required'],
            'user_id' => ['exists:users,id'],
            'category' => ['required', 'exists:category,id'],
            'tag' => ['required', 'exists:tag,id'],
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $post = new Post();
        $post->title = $data['title'];
        $post->body = $data['description'];
        $post->user_id = $data['user_id'];
        $post->save();
        $post->category()->attach($data['category']);
        $post->tag()->attach($data['tag']);

        $_SESSION['success'] = 'Post успішно добавлений';
        return new RedirectResponse('/post');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $users = User::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('post/form-edit', compact('post', 'users', 'categories', 'tags'));
    }

    public function update()
    {
        
        $data = request()->all();

        $post = Post::find($data['id']);
        $post->title = $data['title'];
        $post->body = $data['description'];
        $post->user_id = $data['user_id'];

        $validator = validator()->make($data, [
            'title' => [
                'required',
                'min:5',
                Rule::unique('post', 'title')->ignore($post->id),
            ],
            'description' => ['required'],
            'user_id' => ['exists:users,id'],
            'category' => ['required', 'exists:category,id'],
            'tag' => ['required', 'exists:tag,id'],
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $post->category()->sync($data['category']);
        $post->tag()->sync($data['tag']);

        $_SESSION['success'] = 'Post успішно змінений';
        return new RedirectResponse('/post');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->category()->detach();
        $post->tag()->detach();
        $post->delete();
        return new RedirectResponse('/post');
    }
}