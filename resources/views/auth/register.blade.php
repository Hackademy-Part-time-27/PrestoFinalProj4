<x-layout>
    <div class="container">
        <div class="row">
                <div class="col-md-6 mx-auto mt-4">
                    <div class="mb-3">
                        <h1>Benvenuto, Registrati qui!</h1>
                    </div>
                    <div class="mt-5 ">
                        <form method="POST" action="/register">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fs-5" for="name">Name</label>
                                <input class="form-control  mb-2 @error('name') is-invalid @enderror" type="text" name="name" id="name">
                                @error('name') <span class="small text-danger fs-6">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fs-5" for="email">Email</label>
                                <input class="form-control  mb-2 @error('email') is-invalid @enderror" type="email" name="email" id="email">
                                @error('email') <span class="small text-danger fs-6">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fs-5" for="password">Password </label>
                                <input class="form-control  mb-2 @error('password') is-invalid @enderror" type="password" name="password" id="password">
                                @error('password') <span class="small text-danger fs-6">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fs-5" for="password_confirmation">Password Confirmation </label>
                                <input class="form-control  mb-2 @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" id="password_confirmation">
                                @error('password_confirmation') <span class="small text-danger fs-6">{{ $message }}</span> @enderror
                            </div>
                            <div class="mt-3">
                                <button class="btn-custom " type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</x-layout>