@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit User</h2>
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Tampilkan Error Validasi -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" required>
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" id="npm" name="npm" value="{{ old('npm', $user->npm) }}" required>
        </div>

        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas</label>
            <select class="form-select" id="kelas_id" name="kelas_id" required>
                @foreach ($kelas as $k)
                    <option value="{{ $k->id }}" {{ $k->id == old('kelas_id', $user->kelas_id) ? 'selected' : '' }}>
                        {{ $k->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="profile_picture" class="form-label">Foto Profil (Opsional)</label>
            <input type="file" class="form-control" id="profile_picture" name="profile_picture" accept="image/*">
            @if ($user->profile_picture)
                <small class="d-block mt-1">Gambar saat ini: <img src="{{ asset('assets/img/' . $user->profile_picture) }}" alt="Foto Profil" class="w-10 h-10 rounded-circle"></small>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
