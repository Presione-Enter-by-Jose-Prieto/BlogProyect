@extends('layouts.auth')
@section('title', 'Register')

@section('content')
    <section class="min-h-screen flex items-start justify-center pt-16">
        <div class="flex flex-col w-[400px]">
            <img src="data:image/png;base64,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" alt="">
            <hr class="border-t border-[#d0d0d0] mb-4 mt-0">
            <h1 
             class="text-center text-2xl pb-1" 
             style="font-family:'Linux Libertine','Georgia';"
            >Registro</h1>
            <hr class="border-t border-[#d0d0d0] my-3 mb-4">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                {{-- name --}}
                <label for="name">
                    <span class="block text-[0.875rem] font-bold pb-1">Usuario</span>
                    <input 
                    type="text" 
                    id="name"
                    name="name"
                    class="peer w-full block border px-2 py-1 text-[0.875rem] border-[#72777d]
                    focus:outline-none focus:ring-1 focus:border-[#36C] focus:ring-[#36C]" 
                    placeholder="Escribe tu nombre de usuario"
                    required
                    >
                    <div class="flex flex-row gap-2 items-center max-h-0 peer-focus:max-h-20 opacity-0 peer-focus:opacity-100 overflow-hidden transition-all duration-300 ease-in-out w-full border border-t-0 border-amber-500 px-3 py-1 mt-px bg-amber-100 text-[0.8rem]">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Commons-emblem-issue.svg/40px-Commons-emblem-issue.svg.png" alt="">
                        <div>
                            <span class="font-bold">Recomendación: </span>Tu nombre de usuario será público y no podrá hacerse privado después. Usar tu nombre real conlleva riesgos.
                        </div>
                    </div>
                </label>
                {{--  --}}
                <label for="email">
                    <span class="block text-[0.875rem] font-bold pb-1 mt-1.5">Email</span>
                    <input 
                    type="email" 
                    id="email"
                    name="email" 
                    class="w-full block border px-2 py-1 text-[0.875rem] border-[#72777d]
                    focus:outline-none focus:ring-1 focus:border-[#36C] focus:ring-[#36C]" 
                    placeholder="Escribe tu correo electronico"
                    required
                    >
                </label>
                {{--  --}}
                <label for="password">
                    <span class="block text-[0.875rem] font-bold pb-1 mt-3">password</span>
                    <input 
                    type="password" 
                    id="password"
                    name="password" 
                    class="peer w-full block border px-2 py-1 text-[0.875rem] border-[#72777d]
                    focus:outline-none focus:ring-1 focus:border-[#36C] focus:ring-[#36C]" 
                    placeholder="Escribe tu correo contraseña"
                    required
                    >
                    <div class="flex flex-row gap-2 items-center max-h-0 peer-focus:max-h-20 opacity-0 peer-focus:opacity-100 overflow-hidden transition-all duration-300 ease-in-out w-full border border-t-0 border-red-500 px-3 py-1 mt-px bg-red-100 text-[0.8rem]">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Gnome-emblem-important.svg/60px-Gnome-emblem-important.svg.png" alt="" class="w-10">
                        <div>
                            <span class="font-bold">Requerimientos: </span> Tu contraseña debe tener al menos 8 caracteres, incluir una letra mayúscula, una minúscula, un número y un carácter especial.
                        </div>
                    </div>
                </label>
                {{-- mantener la sesion iniciada --}}
                <label for="remember" class="mt-4 flex items-center text-[0.875rem]">
                    <input 
                    type="checkbox" 
                    id="remember" 
                    name="remember" 
                    class="mr-2 w-4 h-4 accent-[#36C] focus:outline-none"
                    >
                    Mantener la sesion iniciada
                </label>

                <button 
                type="submit"
                class="mt-4 w-full bg-[#36C] text-white py-2 text-[0.875rem] font-bold
                hover:bg-[#3056A9] transition-colors rounded-xs cursor-pointer"
                >Registrar</button>
            </form>
            <div class="mt-2 text-center text-[0.8rem]">
                ¿Ya tienes una cuenta?
                <a href="{{ route('login-form') }}" class="text-[#2b467c] hover:underline">Acceder</a><br>
                Regresar a
                <a href="" class="text-[#2b467c] hover:underline">Publicaciones</a>
            </div>
        </div>
    </section>
@endsection