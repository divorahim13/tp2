@extends('layouts.app')

@section('content')
<h1>Tambah Proyek Baru</h1>
<form method="POST" action="{{ route('projects.store') }}">
    @csrf
    <label>Nama Proyek</label>
    <input type="text" name="name">
    <label>Deskripsi</label>
    <textarea name="description"></textarea>
    <label>Tenggat Waktu</label>
    <input type="date" name="deadline">
    <button type="submit">Simpan</button>
</form>
@endsection
