<?php
namespace Hillel\Controllers;

use Hillel\Models\Tag;
use Hillel\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class TagController
{
    public function index()
    {
        $tags = Tag::all();
        return view('tag/index', compact('tags'));
    }

    public function show($id)
    {
        $tag = Tag::find($id);
        return view('tag/show', compact('tag'));
    }

    public function create()
    {
        $tag = new Tag();
        $isCreate = true;
        return view('tag/form', compact('tag', 'isCreate'));
    }

    public function store()
    {
        $request = request();
        
        $validator = validator()->make($data, [
            'name' => [
                'required',
                'unique:tag,name',
                'min:5',
            ],
            'slug' => [
                'required',
                'unique:tag,slug',
                'min:5',
            ],
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $tag = new Tag();
        $tag->title = $request->input('title');
        $tag->slug = $request->input('slug');
        $tag->save();

        $_SESSION['success'] = 'Tag успішно добавлений';
        return new RedirectResponse('/tag');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        $isCreate = false;
        return view('tag/form', compact('tag', 'isCreate'));
    }

    public function update()
    {
        $data = request()->all();
        
        $tag = Tag::find($request->input($data['id']));
        $tag->title = $data['name'];
        $tag->slug = $data['slug'];

        $validator = validator()->make($data, [
            'title' => [
                'required',
                'min:5',
                Rule::unique('tag', 'title')->ignore($tag->id),
            ],
            'slug' => ['required',
                'min:5',
                Rule::unique('tag', 'slug')->ignore($tag->id),
            ],
            'user_id' => ['exists:users,id'],
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $tag->save();
        $_SESSION['success'] = 'Tag успішно змінений';
        return new RedirectResponse('/tag');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return new RedirectResponse('/tag');
    }
}