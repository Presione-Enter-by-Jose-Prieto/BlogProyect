{{-- Header del blog--}}
<div class="w-full flex justify-between items-center px-11 py-2">
    <div>
        <a href="{{ route('home.index') }}">
            <h1 class="text-2xl font-semibold" style="font-family:'Linux Libertine','Georgia';">¿Esta todo bien?</h1>
        </a>
    </div>

    <div>
        <ul class="flex flex-row gap-2">
            @if (Auth::check())
                <li><a href="{{ route('posts.create') }}">Crear una publicación</a></li>
                <li>{{ Auth::user()->name }}</li>
            @else
                <li><a href="{{ route('posts.create') }}">Crear una publicación</a></li>
                <li><a href="{{ route('login-form') }}">Acceder</a></li>
            @endif
        </ul>
    </div>
</div> 