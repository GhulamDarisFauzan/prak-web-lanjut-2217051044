<!-- resources/views/user/create.blade.php -->
@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Create New User</h2>
        <form action="{{ route('user.store') }}" method="POST">
        @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" required>
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" name="npm" class="form-control" id="npm" required>
            </div>


            <label for="id_kelas">Kelas :</label><br>
            <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
            </select>

            
      
        <br><br><br><br>

        <div class="form-group">
        <label for="ipk">IPK</label>
        <input type="number" step="0.01" max="4.00" class="form-control" id="ipk" name="ipk" value="{{ old('ipk') ?? $user->ipk ?? '' }}">
        </div>


            <br>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out transform hover:scale-105">Submit</button>



        </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    

    @endsection