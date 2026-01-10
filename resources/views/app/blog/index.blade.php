@extends('layouts.app')
@section('title', 'Blog')

@section('content')
    <div class="h-6 border-b border-[#C6CACE] mb-3"></div>

    @if (session('success'))
        <div class="">
            {{ session('success') }}
        </div>
    @endif
    
    <x-welcome-card :posts="$posts"/>

    <div class="w-full">
        <div class="columns-2 gap-4 mb-20">
            @foreach ($posts as $post)
                <article class="flex flex-col border border-[#A2A9B1] shadow mb-4 break-inside-avoid">
                    <div class="h-80 bg-gray-100 w-full">
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Imagen de {{ $post->title }}" class="w-full h-full object-cover object-center">
                        @endif
                    </div>
                    <div class="p-4 flex flex-col justify-between">
                        <div>
                            <a href="{{ route('posts.show', $post->id) }}">
                                <h3 class="text-[1.5rem] font-normal hover:text-[#0744AC] hover:underline cursor-pointer mb-1.5"
                                style="font-family:'Linux Libertine','Georgia';">{{ $post->title }}</h3>
                            </a>
                            <p class="mb-1.5">{{ $post->excerpt }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Publicado el {{ $post->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endsection
