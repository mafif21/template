<x-admin-layout>
    <x-slot name="title">User</x-slot>

    <div>
        <h5 class="fw-semibold">Daftar User</h5>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary my-3">Tambah User</a>

        <form action="{{ route('admin.users.index') }}" method="get">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control border" placeholder="Cari User" name="query"
                    aria-label="Cari user" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allUsers as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->is_admin == 1 ? 'Admin' : 'Member' }}</td>
                        <td class="d-flex gap-3">
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Edit</a>

                            @if ($user->is_admin == 0)
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="post"
                                    onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>
