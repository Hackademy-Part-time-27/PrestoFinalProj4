<x-layout>

<div class="row">

        <div class="col-md-6 mx-auto mt-4">
            <h1>Accedi con il tuo Account</h1>

            <div class="mt-5">
                <form action="/login" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                            @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-custom">Accedi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>