@extends('layouts.app')

@section('content')
<style>
    /* Gaya Umum */
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    /* Header */
    header {
        background-color: #4CAF50;
        color: white;
        padding: 15px 0;
        text-align: center;
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
        max-width: 600px;
        margin: 20px auto;
        background: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Judul */
    h1 {
        font-size: 24px;
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    /* Form */
    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    label {
        font-weight: bold;
        font-size: 14px;
        color: #555;
    }

    input[type="text"], input[type="date"], textarea {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    textarea {
        height: 100px;
        resize: vertical;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        text-align: center;
    }

    button:hover {
        background-color: #45a049;
    }

    /* Responsif */
    @media (max-width: 768px) {
        .container {
            padding: 15px;
        }
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
    <h1>Tambah Proyek Baru</h1>
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label for="name">Nama Proyek</label>
        <input type="text" id="name" name="name" placeholder="Masukkan nama proyek" required>

        <label for="description">Deskripsi</label>
        <textarea id="description" name="description" placeholder="Tambahkan deskripsi proyek"></textarea>

        <label for="deadline">Tenggat Waktu</label>
        <input type="date" id="deadline" name="deadline">

        <button type="submit">Simpan</button>
    </form>
</div>
@endsection
