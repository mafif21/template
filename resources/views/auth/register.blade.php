<x-app-layout>
    <x-slot name="title">Register</x-slot>

    <main class="d-flex align-items-center justify-content-center flex-column" style="min-height: 100vh;">
        <form class="form-signin w-25" action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="username" name="username"
                    value="{{ old('username') }}">
                <label for="floatingInput">Username</label>
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>
            <div class="form-floating mt-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                    name="email" value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"
                    value="{{ old('password') }}">
                <label for="floatingPassword">Password</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="confirmPassword"
                    name="password_confirmation">
                <label for="floatingPassword">Konfirmasi Password</label>
                <x-input-error :messages="$errors->get('confirmPassword')" class="mt-2" />
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 my-3" type="submit">Sign Up</button>
        </form>

        <p style="font-size: 14px">Sudah punya akun? <a href="{{ route('login') }}"
                class="text-primary fw-semibold text-decoration-none">Masuk</a>
        </p>
    </main>
</x-app-layout>
