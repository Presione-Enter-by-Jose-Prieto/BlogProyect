@extends('layouts.app')
@section('title', 'Blog')

@section('content')
    @if (session('success'))
        <div class="">
            {{ session('success') }}
        </div>
    @endif
    <h2 class="text-xl font-bold mb-4">Bienvenido al Blog</h2>
    <div class="w-[75%]">
        @foreach ($posts as $post)
            <div class="p-2 border mb-2">
                <div class="flex flex-row gap-2 items-center">
                    <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
                    <p class="text-sm text-gray-600">Publicado el {{ $post->created_at->format('d/m/Y') }}</p>
                </div>
                <p class="">{{ $post->excerpt }}</p>
                <p class="text-sm text-gray-800">{{ $post->author->name ?? '—' }}</p>
            </div>
        @endforeach
    </div>
    <div class="w-[25%]"> 

    </div>
@endsection
