<!-- resources/views/user/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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

            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" id="kelas" required>
            </div>

            <label for="id_kelas">Kelas :</label><br>
            <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
            </select>

            <br><br><br>


            <button type="submit" class="btn btn-primary">Submit</button>


        </form>
    </div>
</body>
</html>
