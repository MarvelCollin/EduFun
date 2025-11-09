@extends('layouts.app')

@section('title', 'Popular')

@section('content')
<div class="bg-light" style="min-height: calc(100vh - 300px);">
    <div class="container py-5">
        <h1 class="display-5 fw-bold mb-4" style="color: #2c3e50;">Popular</h1>
        
        @foreach($articles as $article)
        <div class="bg-white rounded-3 shadow-sm mb-3 overflow-hidden">
            <div class="row g-0 p-3">
                <div class="col-md-4 col-lg-3">
                    <img src="{{ $article->image }}" alt="{{ $article->title }}" class="img-fluid rounded" style="height: 150px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-8 col-lg-9 d-flex flex-column justify-content-between ps-md-4 pt-3 pt-md-0">
                    <div>
                        <h3 class="h5 fw-bold mb-2" style="color: #2c3e50;">{{ $article->title }}</h3>
                        <p class="text-muted small mb-2">
                            {{ $article->created_at->format('d M Y') }} | by {{ $article->writer->name }}
                        </p>
                        <p class="mb-3" style="color: #34495e;">
                            {{ Str::limit($article->content, 150) }}
                        </p>
                    </div>
                    <div>
                        <a href="{{ route('article.show', $article->id) }}" class="read-more read-more-dark">read more...</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="d-flex justify-content-center align-items-center mt-4 gap-2">
            @if ($articles->onFirstPage())
                <span class="btn btn-secondary disabled">Previous</span>
            @else
                <a href="{{ $articles->previousPageUrl() }}" class="btn btn-outline-dark">Previous</a>
            @endif

            <span class="px-3 py-2 bg-white border border-2 border-dark rounded fw-bold">
                Page {{ $articles->currentPage() }} | {{ $articles->lastPage() }}
            </span>

            @if ($articles->hasMorePages())
                <a href="{{ $articles->nextPageUrl() }}" class="btn btn-outline-dark">Next</a>
            @else
                <span class="btn btn-secondary disabled">Next</span>
            @endif
        </div>
    </div>
</div>
@endsection
