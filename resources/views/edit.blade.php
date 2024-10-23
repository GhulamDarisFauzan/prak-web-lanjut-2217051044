@extends('layouts.index')

@section('content')
    <form method="POST" action="{{ url('pegawai/' . $model->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <!-- Tambahkan input lainnya di sini -->
    </form>
@endsection
