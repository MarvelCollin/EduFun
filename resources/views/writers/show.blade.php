@extends('layouts.app')

@section('title', $writer->name)

@section('content')
<div class="container" style="padding-top: 3rem; padding-bottom: 3rem; background-color: #f5f5f5; min-height: calc(100vh - 300px);">
    <div style="background-color: white; padding: 2rem; border-radius: 12px; margin-bottom: 2rem; display: flex; align-items: center; gap: 1.5rem; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <div style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; flex-shrink: 0;">
            <img src="{{ $writer->image }}" alt="{{ $writer->name }}" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div>
            <h2 style="font-size: 1.75rem; font-weight: bold; margin-bottom: 0.5rem; color: #2c3e50;">{{ $writer->name }}</h2>
            <p style="color: #7f8c8d; font-size: 1rem;">{{ $writer->expertise }}</p>
        </div>
    </div>

    @foreach($articles as $article)
    <div style="background-color: white; border-radius: 12px; margin-bottom: 1.5rem; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.1)'">
        <div style="display: flex; gap: 2rem; padding: 1.5rem;">
            <div style="flex-shrink: 0;">
                <img src="{{ $article->image }}" alt="{{ $article->title }}" style="width: 250px; height: 150px; object-fit: cover; border-radius: 8px;">
            </div>
            <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <h3 style="font-size: 1.35rem; font-weight: bold; margin-bottom: 0.75rem; color: #2c3e50;">{{ $article->title }}</h3>
                    <p style="color: #7f8c8d; font-size: 0.875rem; margin-bottom: 0.75rem;">
                        {{ $article->created_at->format('d M Y') }} | by {{ $writer->name }}
                    </p>
                    <p style="color: #34495e; line-height: 1.6; margin-bottom: 1rem;">
                        {{ Str::limit($article->content, 200) }}
                    </p>
                </div>
                <div>
                    <a href="#" class="read-more" style="display: inline-block; padding: 0.5rem 1.5rem; background-color: #1e3a5f; color: white; text-decoration: none; border-radius: 20px; font-size: 0.875rem; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#2c3e50'" onmouseout="this.style.backgroundColor='#1e3a5f'">read more...</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
