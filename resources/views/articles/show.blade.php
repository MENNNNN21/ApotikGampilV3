@extends('layouts.app')

@section('title', $article->title)

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $article->title }}</h1>
        <a href="{{ route('articles') }}" class="btn btn-secondary">Kembali</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            @if($article->image)
                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid" style="max-height:300px;">
                </div>
            @endif

            <div class="mb-4">
                <small class="text-muted">Diposting pada: {{ $article->created_at->format('d M Y H:i') }}</small>
            </div>

            <div class="article-content">
                {!! $article->content !!}
            </div>
        </div>
    </div>
</div>
@endsection