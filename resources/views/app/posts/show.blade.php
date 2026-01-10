@extends('layouts.app')
@section('title', $post->title)

@section('content')

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <div class="h-6 border-b border-[#C6CACE] mb-3"></div>
    <div class="flex flex-row mb-20">
        <div class="w-[70%] pr-4">
            <div>
                <article>
                    <div class="h-100 bg-gray-100 w-full mb-4">
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Imagen de {{ $post->title }}" class="w-full h-full object-cover object-center">
                        @endif
                    </div>
                    <div>
                        <h3 class="text-[1.8rem] font-normal"
                        style="font-family:'Linux Libertine','Georgia';">{{ $post->title }}</h3>
                        <div class="h-1 border-b border-[#C6CACE] mb-3"></div>
                        <div class="prose prose-sm max-w-none" style="line-height: 1.625;">
                            <style>
                                .prose p { margin: 0.5em 0 1em 0; }
                                .prose h1 { font-size: 2em; font-family: 'Linux Libertine', 'Georgia'; }
                                .prose h2 { font-size: 1.5em; font-family: 'Linux Libertine', 'Georgia'; }
                                .prose h3 { font-size: 1.3em; font-family: 'Linux Libertine', 'Georgia'; }
                                .prose h4, .prose h5, .prose h6 { font-weight: 700; margin: 1em 0 0.3em 0; }
                                .prose ul, .prose ol { margin: 1em 0; padding-left: 2em; }
                                .prose li { margin: 0.4em 0; }
                                .prose blockquote { border-left: 4px solid #C6CACE; padding-left: 1em; margin: 1em 0; color: #666; font-style: italic; }
                                .prose code { background: #f5f5f5; padding: 0.2em 0.4em; border-radius: 3px; font-size: 0.9em; }
                                .prose pre { background: #f5f5f5; padding: 1em; border-radius: 5px; overflow-x: auto; margin: 1em 0; }
                                .prose pre code { background: none; padding: 0; }
                                .prose a { color: #0066cc; text-decoration: underline; }
                                .prose a:hover { color: #0052a3; }
                                .prose img { max-width: 100%; height: auto; margin: 1em 0; }
                                .prose strong { font-weight: 700; }
                                .prose em { font-style: italic; }
                                .prose hr { border: none; border-top: 1px solid #C6CACE; margin: 1em 0; }
                            </style>
                            {!! Str::markdown($post->content) !!}
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="w-[30%] h-full sticky top-2.5">
            <div class="p-4 border border-[#C6CACE] h-full">
                <h1 class="text-[1.3rem]" style="font-family:'Linux Libertine','Georgia';">Información sobre esta publicación</h1>
                <div class="flex flex-row gap-2">
                    <p class="mt-2 text-sm text-gray-600 pr-3 border-r border-[#C6CACE]"><strong >Categoría:</strong> {{ $post->category->name }}</p>
                    <p class="mt-2 text-sm text-gray-600"><strong >Autor:</strong> {{ $post->author->name }}</p>
                </div>
                <p class="mt-2 text-sm text-gray-600"><strong class="block">Resumen:</strong> {{ $post->excerpt }}</p>
                <p class="mt-2 text-sm text-gray-600">Publicado el {{ $post->created_at->format('d/m/Y') }}</p>
            </div>
        </div>
    </div>
@endsection
