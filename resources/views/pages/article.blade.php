@extends('layouts.app')

@section('title', $article->title)

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h2 class="fw-bold mb-3" style="color: #2c3e50;">{{ $article->category->name }}</h2>
            
            <div class="bg-white rounded-3 shadow-sm overflow-hidden">
                <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-100" style="height: 400px; object-fit: cover;">
                
                <div class="p-4">
                    <h1 class="h3 fw-bold mb-3" style="color: #2c3e50;">{{ $article->title }}</h1>
                    
                    <p class="text-muted mb-4">
                        {{ $article->created_at->format('d M Y') }} | by: {{ $article->writer->name }}
                    </p>
                    
                    <div class="article-content" style="color: #34495e; line-height: 1.8; text-align: justify;">
                        {!! nl2br(e($article->content)) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
