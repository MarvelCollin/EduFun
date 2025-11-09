<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::with(['category', 'writer'])->findOrFail($id);
        
        $article->increment('views');
        
        return view('pages.article', compact('article'));
    }
}
