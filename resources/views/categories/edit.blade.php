<x-layout>
    <div class="row">
        <div class="col-md-6 mx-auto fs-4">
            <div class="my-4">
                <h1>Crea una nuova Categoria</h1>
                <x-success/>
            </div>
            <form action="{{ route('category.update', $category) }}" method="post">
             @csrf
             @method('PUT')
             <div class="mb-3">
                <label class="form-label" for="name">Nome Categoria</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ old('name',$category->name )  }}">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
             </div>
             <div class="mb-3">
                <button class="btn-custom" type="submit">Crea</button>
             </div>
            </form>
        </div>
    </div>
</x-layout>