@extends('layouts.app')

@section('content')
<h1>Daftar Proyek</h1>
<a href="{{ route('projects.create') }}">Tambah Proyek Baru</a>
<form method="GET" action="{{ route('projects.index') }}">
    <input type="text" name="search" placeholder="Cari proyek...">
    <button type="submit">Cari</button>
</form>
<ul>
    @foreach($projects as $project)
        <li>{{ $project->name }} - {{ $project->tasks->count() }} Tugas</li>
    @endforeach
</ul>
@endsection
