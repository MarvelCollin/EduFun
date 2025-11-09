@extends('layouts.app')

@section('title', $category->name)

@section('content')
<div class="hero-section" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=1200&h=400&fit=crop');">
    <h1 class="display-4">{{ $category->name }}</h1>
</div>

<div class="container my-5">
    @if($articles->count() > 0)
        <div class="row g-4">
            @foreach($articles as $article)
                <div class="col-md-6 col-lg-4">
                    <div class="article-card">
                        <img src="https://picsum.photos/400/200?random={{ $article->id }}" 
                             alt="{{ $article->title }}" 
                             class="article-image">
                        <div class="p-3">
                            <h5 class="fw-bold">{{ $article->title }}</h5>
                            <p class="text-muted small mb-2">
                                {{ $article->created_at->format('d M Y') }} | by: {{ $article->writer->name }}
                            </p>
                            <p class="text-muted">{{ Str::limit($article->body, 100) }}</p>
                            <a href="{{ route('article.show', $article->id) }}" class="read-more-dark text-white text-decoration-none">
                                read more...
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-5">
            <h3>No articles found in this category.</h3>
        </div>
    @endif
</div>
@endsection
