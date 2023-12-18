<x-app-layout>
    <x-slot name="title">Register</x-slot>

    <main class="d-flex align-items-center justify-content-center flex-column py-5" style="min-height: 100vh;">
        <form class="form-signin w-25" action="{{ route('register.store') }}" method="POST">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="name lengkap kamu"
                    name="namaLengkap">
                <label for="floatingInput">Nama Lengkap</label>
                <x-input-error :messages="$errors->get('namaLengkap')" class="mt-2" />
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                    name="email">
                <label for="floatingInput">Email address</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                    name="password">
                <label for="floatingPassword">Password</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="alamatKtp" placeholder="alamatKtp" name="alamatKtp">
                <label for="alamatKtp">Alamat KTP</label>
                <x-input-error :messages="$errors->get('alamatKtp')" class="mt-2" />
            </div>
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="alamatSekarang" placeholder="alamatSekarang"
                    name="alamatSekarang">
                <label for="alamatSekarang">Alamat</label>
                <x-input-error :messages="$errors->get('alamatSekarang')" class="mt-2" />
            </div>
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="kecamatanSekarang" placeholder="kecamatanSekarang"
                    name="kecamatanSekarang">
                <label for="kecamatanSekarang">Kecamatan</label>
                <x-input-error :messages="$errors->get('kecamatanSekarang')" class="mt-2" />
            </div>
            <div class="input-group mt-2">
                <label class="input-group-text" for="provinsiSekarang">Provinsi</label>
                <select class="form-select" id="provinsiSekarang" name="provinsiSekarang">
                    <option selected>Choose...</option>
                    @foreach ($provincies as $provincy)
                        <option value="{{ $provincy->id }}">{{ $provincy->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mt-2">
                <label class="input-group-text" for="kabupatenSekarang">Kabupaten</label>
                <select class="form-select" id="kabupatenSekarang" name="kabupatenSekarang">
                    <option selected>Choose...</option>
                    @foreach ($regencies as $regency)
                        <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="noHp" placeholder="noHp" name="noHp">
                <label for="noHp">Nomor Hp</label>
                <x-input-error :messages="$errors->get('noHp')" class="mt-2" />
            </div>
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="kewarganegaraan" placeholder="kewarganegaraan"
                    name="kewarganegaraan">
                <label for="kewarganegaraan">kewarganegaraan</label>
                <x-input-error :messages="$errors->get('kewarganegaraan')" class="mt-2" />
            </div>
            <div class="form-floating mt-2">
                <input type="date" class="form-control" id="tanggalLahir" placeholder="tanggalLahir"
                    name="tanggalLahir">
                <label for="tanggalLahir">Tanggal Lahir</label>
                <x-input-error :messages="$errors->get('tanggalLahir')" class="mt-2" />
            </div>
            <div class="input-group mt-2">
                <label class="input-group-text" for="kabupatenLahir">Kabupaten Kelahiran</label>
                <select class="form-select" id="kabupatenLahir" name="kabupatenLahir">
                    <option selected>Choose...</option>
                    @foreach ($regencies as $regency)
                        <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mt-2">
                <label class="input-group-text" for="provinsiLahir">Provinsi Kelahiran</label>
                <select class="form-select" id="provinsiLahir" name="provinsiLahir">
                    <option selected>Choose...</option>
                    @foreach ($provincies as $provincy)
                        <option value="{{ $provincy->id }}">{{ $provincy->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mt-2">
                <label class="input-group-text" for="jenisKelamin">Jenis Kelamin</label>
                <select class="form-select" id="jenisKelamin" name="jenisKelamin">
                    <option selected>Choose...</option>
                    @foreach ($genders as $gender)
                        <option value="{{ $gender }}">{{ $gender }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mt-2">
                <label class="input-group-text" for="status">Status</label>
                <select class="form-select" id="status" name="status">
                    <option selected>Choose...</option>
                    @foreach ($status as $status)
                        <option value="{{ $status }}">{{ $status }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mt-2">
                <label class="input-group-text" for="jenisKelamin">Jenis Kelamin</label>
                <select class="form-select" id="jenisKelamin" name="jenisKelamin">
                    <option selected>Choose...</option>
                    @foreach ($genders as $gender)
                        <option value="{{ $gender }}">{{ $gender }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <label for="formFile" class="form-label">Photo Profile</label>
                <input class="form-control" type="file" id="formFile" name="profile_photo">
                <x-input-error :messages="$errors->get('profile_photo')" class="mt-2" />
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2 my-3" type="submit">Sign up</button>
        </form>

        <p style="font-size: 14px">Sudah punya akun? <a href="{{ route('login') }}"
                class="text-primary fw-semibold text-decoration-none">Masuk</a>
        </p>
    </main>
</x-app-layout>
