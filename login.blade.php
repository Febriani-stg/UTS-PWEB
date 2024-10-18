@extends('layouts.app')

@section('title', 'Halaman Login')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-center">Login</h1>
    <form action="{{ url('/contact') }}" method="GET" class="max-w-md mx-auto p-4 bg-white border border-gray-300 rounded shadow-md">
        <div class="mb-4">
            <label for="email" class="block">Email</label>
            <input type="email" id="email" name="email" class="border rounded w-full py-2 px-3" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block">Password</label>
            <input type="password" id="password" name="password" class="border rounded w-full py-2 px-3" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Login</button>
    </form>
@endsection