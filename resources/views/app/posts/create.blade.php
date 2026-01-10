@extends('layouts.app')
@section('title', 'Crear una publicación')

@section('content')
<div class="w-full">
        <h2 class="text-2xl mb-4 pb-1 border-b border-[#9FA6AD]"
        style="font-family:'Linux Libertine','Georgia';">¿Quieres crear una publicación?</h2>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="image">Imagen de portada:</label><br>
            <input type="file" name="image" id="image" class="w-full block border px-2 py-1 text-[0.875rem] border-[#72777d] focus:outline-none focus:ring-1 focus:border-[#36C] focus:ring-[#36C] mb-4">
        </div>
        <div>
            <label for="title">Título:</label><br>
            <input 
             class="w-full block border px-2 py-1 text-[0.875rem] border-[#72777d]
             focus:outline-none focus:ring-1 focus:border-[#36C] focus:ring-[#36C]
             mb-4" 
             type="text" 
             id="title" 
             name="title" 
             required
            >
        </div>
        <div>
            <label for="content">Contenido:</label><br>
            <textarea 
             class="w-full block border px-2 py-1 text-[0.875rem] border-[#72777d]
             focus:outline-none focus:ring-1 focus:border-[#36C] focus:ring-[#36C]
             mb-4" 
             id="content" 
             name="content" 
             required
            ></textarea>
        </div>
        <div>
            <label for="excerpt">Resumen:</label><br>
            <textarea 
             class="w-full block border px-2 py-1 text-[0.875rem] border-[#72777d]
             focus:outline-none focus:ring-1 focus:border-[#36C] focus:ring-[#36C]
             mb-4" 
             id="excerpt" 
             name="excerpt" 
             required
            ></textarea>
        </div>
        <div class="flex flex-row gap-3">
            <div class="w-[50%]">
                <label for="category_id">Categoría:</label><br>
                <select name="category_id" id="category_id" class="w-full block border px-2 py-1 text-[0.875rem] border-[#72777d] focus:outline-none focus:ring-1 focus:border-[#36C] focus:ring-[#36C] mb-4" onchange="toggleNewCategoryInput()">
                    <option value="">-- Seleccionar categoría --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    <option value="new">Crear nueva categoría</option>
                </select>
            </div>
            <div class="w-[50%]">
                <label for="new_category">Nombre de la nueva categoría:</label><br>
                <input type="text" name="new_category" id="new_category" placeholder="Nombre de la nueva categoría" class="w-full block border px-2 py-1 text-[0.875rem] border-[#72777d] focus:outline-none focus:ring-1 focus:border-[#36C] focus:ring-[#36C] mb-4">
            </div>
        </div>
        <button 
        type="submit"
        class="mt-4 w-full bg-[#36C] text-white py-2 text-[0.875rem] font-bold
        hover:bg-[#3056A9] transition-colors rounded-xs cursor-pointer"
        >Crear Publicación</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const ids = ['content', 'excerpt'];

        ids.forEach(id => {
            const el = document.getElementById(id);
            if (!el) return;

            el.style.overflow = 'hidden';
            el.style.resize = 'none';

            const autoResize = () => {
                el.style.height = 'auto';
                el.style.height = el.scrollHeight + 'px';
            };

            el.addEventListener('input', autoResize);
            autoResize();
        });
    });
</script>

@endsection