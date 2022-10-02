<?php
namespace Hillel\Controllers;

use Hillel\Models\Tag;
use Illuminate\Http\RedirectResponse;

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
        return view('tag/create', compact('tag'));
    }

    public function store()
    {
        $request = request();
        // print_r($request->all());

        $tag = new Tag();
        $tag->title = $request->input('title');
        $tag->slug = $request->input('slug');
        $tag->save();
        return new RedirectResponse('/tag');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tag/edit', compact('tag'));
    }

    public function update()
    {
        $request = request();
        // print_r($request->all());
        
        $tag = Tag::find($request->input('id'));
        $tag->title = $request->input('title');
        $tag->slug = $request->input('slug');
        $tag->save();
        return new RedirectResponse('/tag');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return new RedirectResponse('/tag');
    }
}