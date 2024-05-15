    <div>
        <div class="my-4">
                <h1>Crea un nuovo Annuncio</h1>
                <x-success/>
        </div>
            <form>
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="title">Titolo</label>
                        <input livewire:model.live='title' class="form-control" type="text">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="body">Corpo</label>
                        <textarea class="form-control"  livewire:model.live='body'></textarea>
                        @error('body') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="title">Prezzo</label>
                        <input livewire:model.live='price' class="form-control" type="number" min=0 step=0.01;>
                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn-custom" type="submit">Crea</button>
                    </div>
            </form>
      
    </div>
