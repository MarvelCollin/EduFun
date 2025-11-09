@extends('layouts.app')

@section('title', 'Our Writers')

@section('content')
<div class="container my-5 py-4">
    <h1 class="display-5 fw-bold mb-5" style="color: #2c3e50;">Our Writers:</h1>
    
    <div class="row g-5 justify-content-center">
        @foreach($writers as $writer)
        <div class="col-md-6 col-lg-3">
            <a href="{{ route('writers.show', $writer->id) }}" class="writer-card">
                <div class="writer-circle">
                    <img src="{{ $writer->image }}" alt="{{ $writer->name }}">
                </div>
                <h3 class="h5 fw-bold mb-2" style="color: #2c3e50;">{{ $writer->name }}</h3>
                <p class="text-muted">{{ $writer->expertise }}</p>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
