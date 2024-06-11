<div>
    <div class="col-md-6 mx-auto fs-c-1 ">
        <div class="my-4">
                <h1 class="">{{__('ui.ads_create_text') }}</h1>
                <x-success/>
        </div class="">
            <form wire:submit="addAnnouncement()">
                
                    <div class="mb-3">
                        <label class="form-label text-3" for="title">{{__('ui.ads_title') }}</label>
                        <input wire:model.live='title' class="form-control mb-2 @error('title') is-invalid @enderror" type="text">
                        @error('title') <span class="text-danger ">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label text-3">{{__('ui.category_name') }}</label>
                        <select name="categoy_id" wire:model="category_id" class="form-control" >
                                <option value="">{{ __('ui.choose_category') }}</option>
                            @foreach($categories as $category)
                                <option class="" value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')  <span class="text-danger ">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-3" for="body">{{__('ui.ads_description') }}</label>
                        <textarea class="form-control mb-2 @error('body') is-invalid @enderror"  wire:model.live='body'></textarea>
                        @error('body') <span class="text-danger ">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-3" for="title">{{__('ui.ads_price') }}</label>
                        <input wire:model.live='price' class="form-control mb-2 @error('price') is-invalid @enderror" type="number" min="0" step="0.01";>
                        @error('price') <span class="text-danger ">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-3" for="title">{{__('ui.ads_image') }}</label>
                        <input wire:model='temporary_images' class="form-control mb-2 @error('temporary_images.*') is-invalid @enderror" type="file" multiple placeholder="/Img">
                        @error('temporary_images.*') <span class="text-danger ">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <div class="mt-2">
                            <div wire:loading wire:target="temporary_images" > 
                                <div class="spinner-border text-secondary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                        @if(!empty($images))
                            <div class="my-3 bordered rounded-2 m-2">
                                            <h5>{{__('ui.ads_preview_image') }}</h5>
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
                        <button class="btn-custom" type="submit" >{{__('ui.ads_create_button') }}</button>
                    </div>
            </form> 
    </div>
</div>