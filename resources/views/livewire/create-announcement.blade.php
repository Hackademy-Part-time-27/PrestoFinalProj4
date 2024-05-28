<div>
    <div class="col-md-6 mx-auto fs-4">
        <div class="my-4">
                <h1>Crea un nuovo Annuncio</h1>
                <x-success/>
        </div class="">
            <form wire:submit="addAnnouncement()">
                
                    <div class="mb-3">
                        <label class="form-label" for="title">Titolo</label>
                        <input wire:model.live='title' class="form-control mb-2 @error('title') is-invalid @enderror" type="text">
                        @error('title') <span class="text-danger ">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Categoria</label>
                        <select name="categoy_id" wire:model="category_id" class="form-control fs-4" >
                            @foreach($categories as $category)
                                <option class="fs-5" value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')  <span class="text-danger ">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="body">Descrizione</label>
                        <textarea class="form-control mb-2 @error('body') is-invalid @enderror"  wire:model.live='body'></textarea>
                        @error('body') <span class="text-danger ">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="title">Prezzo</label>
                        <input wire:model.live='price' class="form-control mb-2 @error('price') is-invalid @enderror" type="number" min="0" step="0.01";>
                        @error('price') <span class="text-danger ">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="title">Immagini</label>
                        <input wire:model='temporary_images' class="form-control mb-2 @error('temporary_images.*') is-invalid @enderror" type="file" multiple placeholder="/Img">
                        @error('temporary_images.*') <span class="text-danger ">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <div class="mt-2">
                            <div wire:loading> 
                                <div class="spinner-border text-secondary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                        @if(!empty($images))
                            <div class="my-3 bordered rounded-2 m-2">
                                            <h5>Preview Immagini</h5>
                                        <div class="row justify-content-center mx-auto w-100 border-custom">
                                                @foreach($images as $key => $image)
                                                <div class="col">
                                                    <span wire:click="removeImage({{$key}})" style="cursor:pointer;" class="material-symbols-outlined"> cancel </span>
                                                    <img class="imfg-fluid img-edited my-3" src="{{ $image->temporaryUrl() }}" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                            </div>
                        @endif   
                        <button class="btn-custom" type="submit">Crea</button>
                    </div>
            </form> 
    </div>
</div>