{{-- Header del blog--}}
<div class="w-full flex justify-between items-center px-[50px] py-2">
    <div>
        <a href="{{ route('home.index') }}">
            <h1 class="text-xl" style="font-family:'Linux Libertine','Georgia';">Volver al Inicio</h1>
        </a>
    </div>

    <div>
        <ul class="flex flex-row gap-2">
            @if (Auth::check())
                <li><a class="hover:underline hover:text-[#3056A9] text-[14px]" href="{{ route('login-form') }}">{{ Auth::user()->name }}</a></li>
                <li><a class="text-[#36C] text-[14px] hover:underline" href="{{ route('posts.create') }}">Crear una publicación</a></li>
            @else
                <li><a class="text-[#36C] text-[14px] hover:underline" href="{{ route('posts.create') }}">Crear una publicación</a></li>
                <li><a class="text-[#36C] text-[14px] hover:underline" href="{{ route('login-form') }}">Acceder</a></li>
            @endif
        </ul>
    </div>
</div> 