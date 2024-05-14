<x-layout>
<div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="mb-3">
                    <h1>Benvenuto, Registrati qui!</h1>
                </div>
                <div class="mt-5 ">
                    <form method="POST" action="/register">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" type="text" name="name" id="name">
                            @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email">
                            @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">Password </label>
                            <input class="form-control" type="password" name="password" id="password">
                            @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password_confirmation">Password Confirmation </label>
                            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
                            @error('password_confirmation') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary " type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-layout>