<x-layout>
    <div class="row">
        <div class="col-md-6 mx-auto fs-4">
            <div class="my-4">
                <h1>{{__('ui.create_category_text') }}</h1>
                <x-success/>
            </div>
            <form action="{{ route('category.store') }}" method="post">
             @csrf
             <div class="mb-3">
                <label class="form-label" for="name">{{__('ui.create_category_name') }}</label>
                <input class="form-control" type="text" name="name" id="name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
             </div>
             <div class="mb-3">
                <button class="btn-custom" type="submit">{{__('ui.create_category_button') }}</button>
             </div>
            </form>
        </div>
    </div>
</x-layout>