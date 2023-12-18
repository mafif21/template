<x-app-layout>
    <x-slot name="title">Student Register</x-slot>

    <main class="container my-4">
        <h3>Hello {{ Auth::user()->username }}</h3>
        <p>Silahkan melakukan pendaftaran untuk masuk kedalam universitas</p>

        <form class="form-signin" action="{{ route('registercollege.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name lengkap kamu"
                            name="namaLengkap">
                        <label for="floatingInput">Nama Lengkap</label>
                        <x-input-error :messages="$errors->get('namaLengkap')" class="mt-2" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                            name="email">
                        <label for="floatingInput">Email address</label>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                            name="password">
                        <label for="floatingPassword">Password</label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
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

            <div class="row">
                <div class="col">
                    <div class="input-group mt-2">
                        <label class="input-group-text" for="provinsiSekarang">Kecamatan</label>
                        <select class="form-select" id="provinsiSekarang" name="provinsiSekarang">
                            <option selected>Choose...</option>
                            @foreach ($provincies as $provincy)
                                <option value="{{ $provincy->id }}">{{ $provincy->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mt-2">
                        <label class="input-group-text" for="provinsiSekarang">Provinsi</label>
                        <select class="form-select" id="provinsiSekarang" name="provinsiSekarang">
                            <option selected>Choose...</option>
                            @foreach ($provincies as $provincy)
                                <option value="{{ $provincy->id }}">{{ $provincy->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="input-group mt-2">
                        <label class="input-group-text" for="kabupatenSekarang">Kabupaten</label>
                        <select class="form-select" id="kabupatenSekarang" name="kabupatenSekarang">
                            <option selected>Choose...</option>
                            @foreach ($regencies as $regency)
                                <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
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
                    @foreach (App\Enums\GendersEnums::cases() as $gender)
                        <option value="{{ $gender }}">{{ $gender }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mt-2">
                <label class="input-group-text" for="status">Status</label>
                <select class="form-select" id="status" name="status">
                    <option selected>Choose...</option>
                    @foreach (App\Enums\PersonStatus::cases() as $status)
                        <option value="{{ $status }}">{{ $status }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mt-2">
                <label class="input-group-text" for="religion">Agama</label>
                <select class="form-select" id="religion" name="religion">
                    <option selected>Choose...</option>
                    @foreach (App\Enums\ReligionsEnums::cases() as $religion)
                        <option value="{{ $religion }}">{{ $religion }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <label for="formFile" class="form-label">Photo Profile</label>
                <input class="form-control" type="file" id="formFile" name="profile_photo">
                <x-input-error :messages="$errors->get('profile_photo')" class="mt-2" />
            </div>
            <button type="submit" class="btn btn-primary w-100 py-2 my-3" type="submit">Daftar Universitas</button>
        </form>

    </main>
</x-app-layout>
