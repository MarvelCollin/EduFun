<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $articles = Article::with(['category', 'writer'])
            ->where('category_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.category', compact('category', 'articles'));
    }
}
