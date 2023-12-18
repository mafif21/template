<x-admin-layout>
    <x-slot name="title">Edit User</x-slot>

    <div>
        <h5 class="fw-semibold">Daftar User</h5>
        <p>Silahkan admin untuk menambahkan user sesuai yang anda inginkan</p>
        <form method="post" action="{{ route('admin.users.update', $user->id) }}" class="my-4">
            @csrf
            @method('PUT')
            <div class="form-floating mb-2">
                <input type="text" class="form-control border border-secondary w-50 rounded" id="username"
                    placeholder="Username" name="username" value="{{ $user->username }}">
                <label for="username">Username</label>
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>
            <div class="form-floating mb-2">
                <input type="email" class="form-control border border-secondary w-50 rounded" id="email"
                    placeholder="email" name="email" value="{{ $user->email }}">
                <label for="email">Email</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-floating mb-2">
                <input type="hidden" name="oldPass" value="{{ $user->password }}">
                <input type="password" class="form-control border border-secondary w-50 rounded" id="newPassword"
                    placeholder="newPassword" name="newPassword">
                <label for="newPassword">Password Baru</label>
                <x-input-error :messages="$errors->get('newPassword')" class="mt-2" />
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="is_admin" id="flexCheckDefault"
                    @checked($user->is_admin == 1)>
                <label class="form-check-label" for="flexCheckDefault">
                    Admin
                </label>
            </div>
            <button type="submit" class="btn btn-primary mt-2 w-50">Edit User</button>
        </form>
    </div>
</x-admin-layout>
