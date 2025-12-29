@extends('layouts.app')
@section('title', 'Blog')

@section('content')
    @if (session('success'))
        <div class="">
            {{ session('success') }}
        </div>
    @endif
    <div class="w-[75%]">
        <h2 class="text-2xl mb-4 pb-1 border-b border-[#9FA6AD]"
        style="font-family:'Linux Libertine','Georgia';">Bienvenido a la pagina principal: {{ Auth::user()->name }}</h2>
        <div class="grid grid-cols-2 gap-4">
            @foreach ($posts as $post)
                <div class="p-2 border border-[#A2A9B1] shadow">
                    <h3 class="text-[1.5rem] font-normal hover:text-[#0744AC] hover:underline cursor-pointer"
                    style="font-family:'Linux Libertine','Georgia';">{{ $post->title }}</h3>
                    <p >{{ $post->excerpt }}</p>
                    <p class="text-sm text-gray-600">Publicado el {{ $post->created_at->format('d/m/Y') }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="w-[25%]"> 

    </div>
@endsection
