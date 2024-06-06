<x-layout>

<div class="container">
    <div class="row">

        <div class="col-md-6 mx-auto mt-4">
            <h1>{{__('ui.login_text') }}</h1>

            <div class="mt-5 ">
                <form action="/login" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label fs-6 text-3" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control  mb-2 @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email') <span class="small text-danger fs-6">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label fs-6 text-3" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control  mb-2 @error('password') is-invalid @enderror">
                            @error('password') <span class="small text-danger fs-6">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-custom">{{__('ui.login_button') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</x-layout>