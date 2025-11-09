<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $latestArticles = Article::with(['category', 'writer'])
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        $categories = Category::all();

        return view('home', compact('latestArticles', 'categories'));
    }
}
