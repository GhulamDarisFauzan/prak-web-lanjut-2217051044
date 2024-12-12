



 
 @extends('layouts.app')

@section('content')
<div class="flex items-center justify-center h-screen">
    <div class="overflow-x-auto flex flex-col justify-center items-center bg-blue-200 rounded-xl shadow-lg py-6 px-3">
        <table class="min-w-full table-auto border-collapse border border-black">
            <thead>
                <tr class="bg-gray-300">
                    <th class="border border-black px-3 py-2 text-left">ID</th>
                    <th class="border border-black px-3 py-2 text-left">Nama</th>
                    <th class="border border-black px-3 py-2 text-left">NPM</th>
                    <th class="border border-black px-3 py-2 text-left">Kelas</th>
                    <th class="border border-black px-3 py-2 text-left">IPK</th>
                    <th class="border border-black px-3 py-2 text-left">Foto</th>
                    <th class="border border-black px-3 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="hover:bg-gray-100 bg-white">
                        <td class="border border-black px-3 py-2 text-left">{{ $user->id }}</td>
                        <td class="border border-black px-3 py-2 text-left">{{ $user->nama }}</td>
                        <td class="border border-black px-3 py-2 text-left">{{ $user->npm }}</td>
                        <td class="border border-black px-3 py-2 text-left">{{ $user->nama_kelas }}</td>
                        <td class="border border-black px-3 py-2 text-left">{{ $user->ipk ?? 'Tidak ada' }}</td>
                        <td class="border border-black px-3 py-2 text-left">
                            @if ($user->profile_picture)
                                <img src="{{ asset('assets/img/' . $user->profile_picture) }}" alt="Foto Profil" class="w-10 h-10 rounded-full">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                        <td class="border border-black px-3 py-2 text-left">
                            <form action="{{ route('users.update', $user->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</button>
                            </form>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex justify-between items-center mt-5">
            <button class="bg-green-300 font-bold text-center rounded-lg py-1 px-2">
                <a href="{{ route('create_user') }}">Tambah Pengguna Baru</a>
            </button>
        </div>
    </div>
</div>
@endsection
