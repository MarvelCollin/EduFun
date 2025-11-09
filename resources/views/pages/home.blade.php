@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="hero-section" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1200');">
    <h1 style="font-size: 3rem;">Selamat Datang di EduFun</h1>
</div>

<div class="container my-5">
    <h2 class="fw-bold mb-4" style="color: #2c3e50;">Artikel Terbaru</h2>
    
    <div class="row g-4">
        @foreach($latestArticles as $article)
        <div class="col-md-6 col-lg-4">
            <div class="article-card">
                <img src="{{ $article->image }}" alt="{{ $article->title }}" class="article-image">
                <div class="p-4">
                    <h3 class="h5 fw-bold mb-2" style="color: #2c3e50;">{{ $article->title }}</h3>
                    <p class="text-muted small mb-3">
                        {{ $article->created_at->format('d M Y') }} | by {{ $article->writer->name }}
                    </p>
                    <p class="mb-3" style="color: #34495e;">
                        {{ Str::limit($article->content, 150) }}
                    </p>
                    <a href="#" class="read-more">read more...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
