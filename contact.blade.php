@extends('layouts.app')

@section('title', 'Halaman Kontak')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-center">Daftar Mahasiswa</h1>
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border bg-gray-200">Nama</th>
                <th class="py-2 px-4 border bg-gray-200">NIM</th>
                <th class="py-2 px-4 border bg-gray-200">Prodi</th>
                <th class="py-2 px-4 border bg-gray-200">Email</th>
            </tr>
        </thead>
        <tbody>
            @php
                $mahasiswa = [
                    ['nama' => 'Andi', 'nim' => '123456', 'prodi' => 'Teknik Informatika', 'email' => 'andi@example.com'],
                    ['nama' => 'Budi', 'nim' => '654321', 'prodi' => 'Sistem Informasi', 'email' => 'budi@example.com'],
                    ['nama' => 'Citra', 'nim' => '789012', 'prodi' => 'Teknik Komputer', 'email' => 'citra@example.com'],
                ];
            @endphp
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td class="py-2 px-4 border">{{ $mhs['nama'] }}</td>
                    <td class="py-2 px-4 border">{{ $mhs['nim'] }}</td>
                    <td class="py-2 px-4 border">{{ $mhs['prodi'] }}</td>
                    <td class="py-2 px-4 border">{{ $mhs['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection