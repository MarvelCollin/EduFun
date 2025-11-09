@extends('layouts.app')

@section('title', $writer->name)

@section('content')
<div class="bg-light" style="min-height: calc(100vh - 300px);">
    <div class="container py-5">
        <div class="bg-white rounded-3 shadow-sm p-4 mb-4 d-flex align-items-center">
            <div style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
                <img src="{{ $writer->image }}" alt="{{ $writer->name }}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="ms-4">
                <h2 class="h3 fw-bold mb-2" style="color: #2c3e50;">{{ $writer->name }}</h2>
                <p class="text-muted mb-0">{{ $writer->expertise }}</p>
            </div>
        </div>

        @foreach($articles as $article)
        <div class="bg-white rounded-3 shadow-sm mb-3 overflow-hidden">
            <div class="row g-0 p-3">
                <div class="col-md-4">
                    <img src="{{ $article->image }}" alt="{{ $article->title }}" class="img-fluid rounded" style="height: 150px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-8 d-flex flex-column justify-content-between ps-md-4">
                    <div>
                        <h3 class="h5 fw-bold mb-2" style="color: #2c3e50;">{{ $article->title }}</h3>
                        <p class="text-muted small mb-2">
                            {{ $article->created_at->format('d M Y') }} | by {{ $writer->name }}
                        </p>
                        <p class="mb-3" style="color: #34495e;">
                            {{ Str::limit($article->content, 200) }}
                        </p>
                    </div>
                    <div>
                        <a href="#" class="read-more read-more-dark">read more...</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
