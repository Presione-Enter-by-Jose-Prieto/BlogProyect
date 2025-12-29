{{-- Header del blog--}}
<div class="w-full flex justify-between items-center px-11 py-2">
    <div>
        <a href="{{ route('home.index') }}">
            <h1 class="text-xl" style="font-family:'Linux Libertine','Georgia';">Volver al Inicio</h1>
        </a>
    </div>

    <div>
        <ul class="flex flex-row gap-2">
            @if (Auth::check())
                <li><a class="text-[#36C] hover:underline" href="{{ route('posts.create') }}">Crear una publicación</a></li>
                <li>{{ Auth::user()->name }}</li>
            @else
                <li><a class="text-[#36C] hover:underline" href="{{ route('posts.create') }}">Crear una publicación</a></li>
                <li><a class="text-[#36C] hover:underline" href="{{ route('login-form') }}">Acceder</a></li>
            @endif
        </ul>
    </div>
</div> 