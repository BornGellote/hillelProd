<?php
namespace Hillel\Controllers;

use Hillel\Models\Category;
use Hillel\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class CategoryController
{
    public function index()
    {
        $categories = Category::all();
        return view('category/index', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('category/show', compact('category'));
    }

    public function create()
    {
        $category = new Category();
        $isCreate = true;
        return view('category/form', compact('category', 'isCreate'));
    }

    public function store()
    {
        $request = request();
        
        $validator = validator()->make($data, [
            'name' => [
                'required',
                'unique:category,name',
                'min:5',
            ],
            'slug' => [
                'required',
                'unique:category,slug',
                'min:5',
            ],
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $category = new Category();
        $category->title = $request->input('title');
        $category->slug = $request->input('slug');
        $category->save();

        $_SESSION['success'] = 'Category успішно добавленa';
        return new RedirectResponse('/category');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $isCreate = false;
        return view('category/form', compact('category', 'isCreate'));
    }

    public function update()
    {
        $data = request()->all();
        
        $category = Category::find($request->input($data['id']));
        $category->title = $data['category'];
        $category->slug = $data['slug'];

        $validator = validator()->make($data, [
            'title' => [
                'required',
                'min:5',
                Rule::unique('category', 'title')->ignore($category->id),
            ],
            'slug' => ['required',
                'min:5',
                Rule::unique('category', 'slug')->ignore($category->id),
            ],
            'user_id' => ['exists:users,id'],
        ]);

        if ($validator->fails()) {
            $_SESSION['errors'] = $validator->errors()->toArray();
            $_SESSION['data'] = $data;
            return new RedirectResponse($_SERVER['HTTP_REFERER']);
        }

        $category->save();
        $_SESSION['success'] = 'Category успішно зміненa';
        return new RedirectResponse('/category');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return new RedirectResponse('/category');
    }
}