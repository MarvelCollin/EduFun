<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PopularController extends Controller
{
    public function index()
    {
        $articles = Article::with(['category', 'writer'])
            ->orderBy('views', 'desc')
            ->paginate(3);

        return view('pages.popular', compact('articles'));
    }
}
