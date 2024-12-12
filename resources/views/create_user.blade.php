<!-- resources/views/user/create.blade.php -->
@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Create New User</h2>
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" name="npm" class="form-control" id="npm" required>
            </div>

            <div class="mb-3">
                <label for="ipk" class="form-label">IPK</label>
                <input type="number" step="0.01" name="ipk" class="form-control" id="ipk" required>
            </div>

            <div class="mb-3">
                <label for="kelas_id" class="form-label">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="form-select" required>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="foto" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Submit
            </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
