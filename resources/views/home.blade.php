@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="hero-section" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1200');">
    <h1 style="font-size: 3rem;">Selamat Datang di EduFun</h1>
</div>

<div class="container">
    <h2 class="section-title">Artikel Terbaru</h2>
    
    <div class="articles-grid">
        @foreach($latestArticles as $article)
        <div class="article-card">
            <img src="{{ $article->image }}" alt="{{ $article->title }}" class="article-image">
            <div class="article-content">
                <h3 class="article-title">{{ $article->title }}</h3>
                <div class="article-meta">
                    {{ $article->created_at->format('d M Y') }} | by {{ $article->writer->name }}
                </div>
                <p class="article-excerpt">
                    {{ Str::limit($article->content, 150) }}
                </p>
                <a href="#" class="read-more">read more...</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
