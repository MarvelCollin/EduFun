@extends('layouts.app')

@section('title', 'Our Writers')

@section('content')
<div class="container" style="padding-top: 3rem; padding-bottom: 3rem;">
    <h1 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 3rem; color: #2c3e50;">Our Writers:</h1>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 3rem; justify-items: center;">
        @foreach($writers as $writer)
        <a href="{{ route('writers.show', $writer->id) }}" style="text-decoration: none; color: inherit;">
            <div style="text-align: center; cursor: pointer; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                <div style="width: 200px; height: 200px; border-radius: 50%; overflow: hidden; margin: 0 auto 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.1); background-color: white;">
                    <img src="{{ $writer->image }}" alt="{{ $writer->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem; color: #2c3e50;">{{ $writer->name }}</h3>
                <p style="color: #7f8c8d; font-size: 0.95rem;">{{ $writer->expertise }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
