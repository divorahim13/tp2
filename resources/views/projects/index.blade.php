@extends('layouts.app')

@section('content')
<style>
    /* Gaya Umum */
    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
    }

    /* Header */
    header {
        background-color: #4CAF50;
        color: white;
        padding: 15px 0;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    header h1 {
        font-size: 24px;
        margin: 0;
    }

    header nav {
        margin-top: 10px;
    }

    header nav a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
        font-size: 14px;
        padding: 5px 10px;
        border: 1px solid transparent;
        border-radius: 5px;
    }

    header nav a:hover {
        background-color: white;
        color: #4CAF50;
        border-color: #4CAF50;
    }

    /* Container */
    .container {
        max-width: 800px;
        margin: 20px auto;
        background: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Judul */
    .title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
        color: #333;
    }

    /* Tombol */
    .btn {
        display: inline-block;
        padding: 10px 15px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 14px;
        text-align: center;
    }

    .btn-primary {
        background-color: #007BFF;
    }

    .btn:hover {
        background-color: #45a049;
    }

    /* Form Pencarian */
    .search-form {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .search-input {
        width: 70%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
    }

    /* Daftar Proyek */
    .project-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .project-item {
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 10px;
        background: #fefefe;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .project-item:hover {
        background: #f0f8ff;
    }

    .task-count {
        font-size: 12px;
        color: #666;
    }

    .no-project {
        text-align: center;
        font-size: 16px;
        color: #999;
    }
</style>

<header>
    <h1>Manajemen Proyek</h1>
    <nav>
        <a href="{{ route('projects.index') }}">Daftar Proyek</a>
        <a href="{{ route('projects.create') }}">Tambah Proyek</a>
    </nav>
</header>

<div class="container">
    <h1 class="title">Daftar Proyek</h1>

    <a href="{{ route('projects.create') }}" class="btn">Tambah Proyek Baru</a>

    <!-- Form Pencarian -->
    <form method="GET" action="{{ route('projects.index') }}" class="search-form">
        <input type="text" name="search" placeholder="Cari proyek..." class="search-input">
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>

    <!-- Daftar Proyek -->
    <ul class="project-list">
        @forelse ($projects as $project)
            <li class="project-item">
                <strong>{{ $project->name }}</strong>
                <span class="task-count">({{ $project->tasks->count() }} Tugas)</span>
            </li>
        @empty
            <li class="no-project">Tidak ada proyek ditemukan.</li>
        @endforelse
    </ul>
</div>
@endsection
