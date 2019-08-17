<?php

namespace App\Http\Controllers\Api;

use App\Model\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::latest()->get();
    }

    public function store(CategoryRequest $request)
    {
        Category::create(array(
            'name' => $request->name,
            'slug' => str_slug($request->name),
        ));

        return response('Criado', Response::HTTP_CREATED);
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update(
            [
                'name' => $request->name,
                'slug' => str_slug($request->name)
            ]
        );

        return response('Atualizado', Response::HTTP_ACCEPTED);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
