<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('dashboard.article.categories', [
            'page' => 'categories',
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|unique:categories,name'
        ]);
        Category::create($validated);
        return redirect()->back();
    }

    public function categories_update($id, Request $request) {
        $validated = $request->validate([
            'category' => 'required|unique:categories,name'
        ]);
        $name['name'] = $validated['category'];
        Category::find($id)->update($name);
        return redirect()->back();
    }

    public function categories_delete($id)
    {
        Category::destroy($id);

        return redirect()->back();
    }
}
