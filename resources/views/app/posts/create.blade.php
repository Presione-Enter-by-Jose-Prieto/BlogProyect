@extends('layouts.app')
@section('title', 'Crear una publicación')

@section('content')
    <h1 class="text-xl font-semibold mb-4">Crear una nueva publicación</h1>
    <div class="w-full">
        <div class="w-[75%]">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
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
                <div>
                    <label for="category_id">Categoría:</label><br>
                    <select name="category_id" id="category_id" class="w-full block border px-2 py-1 text-[0.875rem] border-[#72777d] focus:outline-none focus:ring-1 focus:border-[#36C] focus:ring-[#36C] mb-4" onchange="toggleNewCategoryInput()">
                        <option value="">-- Seleccionar categoría --</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        <option value="new">Crear nueva categoría</option>
                    </select>

                    <div id="new_category_container" class="hidden">
                        <label for="new_category">Nombre de la nueva categoría:</label><br>
                        <input type="text" name="new_category" id="new_category" placeholder="Nombre de la nueva categoría" class="w-full block border px-2 py-1 text-[0.875rem] border-[#72777d] focus:outline-none focus:ring-1 focus:border-[#36C] focus:ring-[#36C] mb-4">
                    </div>
                </div>

                <script>
                    function toggleNewCategoryInput() {
                        const selectElement = document.getElementById('category_id');
                        const newCategoryContainer = document.getElementById('new_category_container');
                        
                        if (selectElement.value === 'new') {
                            newCategoryContainer.classList.remove('hidden');
                        } else {
                            newCategoryContainer.classList.add('hidden');
                        }
                    }
                </script>
                <button 
                type="submit"
                class="mt-4 w-full bg-[#36C] text-white py-2 text-[0.875rem] font-bold
                hover:bg-[#3056A9] transition-colors rounded-xs cursor-pointer"
                >Crear Publicación</button>
            </form>
        </div>
        <div class="w-[25%]">

        </div>
    </div>
@endsection