<x-layout>

<div class="container">
    <div class="row">

        <div class="col-md-6 mx-auto mt-4">
            <h1>{{__('ui.mail_revisor_text') }}</h1>
            <div class="my-2">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
            </div>

            <div class="mt-5 ">
                <form action="{{ route('revisor.post')}}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label fs-5" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control  mb-2 @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email') <span class="small text-danger fs-6">{{ $message }}</span> @enderror
                        </div>
                       
                        <div class="col-12">
                            <button type="submit" class="btn-custom">{{__('ui.mail_revisor_button') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</x-layout>