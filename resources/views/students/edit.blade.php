<!-- resources/views/students/edit.blade.php -->

@extends('layouts.main')
@section('container')
<div class="mx-4 my-8">
    <h1 style="font-size: 30px; font: bold;" class="mb-6 no-select">Student Edit</h1>

    <form action="{{ route('students.update', $student->nim) }}" method="POST" class="no-select">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nim" class="block text-gray-700">NIM</label>
            <input type="text" name="nim" id="nim" value="{{ $student->nim }}" class="border border-gray-300 rounded w-full px-3 py-2">
        </div>
        <div class="mb-4">
            <label for="namamahasiswa" class="block text-gray-700">Student's Name</label>
            <input type="text" name="namamahasiswa" id="namamahasiswa" value="{{ $student->namamahasiswa }}" class="border border-gray-300 rounded w-full px-3 py-2">
        </div>
        <div class="mb-4">
            <label for="kelas" class="block text-gray-700">Class</label>
            <input type="text" name="kelas" id="kelas" value="{{ $student->kelas }}" class="border border-gray-300 rounded w-full px-3 py-2">
        </div>
        <div class="mb-4">
            <label for="angkatan" class="block text-gray-700">Generation</label>
            <input type="text" name="angkatan" id="angkatan" value="{{ $student->angkatan }}" class="border border-gray-300 rounded w-full px-3 py-2">
        </div>
        <div class="mb-4">
            <label for="nohp" class="block text-gray-700">Call Number</label>
            <input type="text" name="nohp" id="nohp" value="{{ $student->nohp }}" class="border border-gray-300 rounded w-full px-3 py-2">
        </div>
        <div class="mb-4">
            <label for="username" class="block text-gray-700">Username</label>
            <input type="text" name="username" id="username" value="{{ $student->username }}" class="border border-gray-300 rounded w-full px-3 py-2">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="text" name="password" id="password" value="{{ $student->password }}" class="border border-gray-300 rounded w-full px-3 py-2">
        </div>
        <div class="mb-4">
            <label for="idadmin" class="block text-gray-700">Admin ID</label>
            <input type="text" name="idadmin" id="idadmin" class="border border-gray-300 rounded w-full px-3 py-2" value="{{ optional(\App\Models\Admin::first())->idadmin}}" readonly>
        </div>
        <button href="{{ route('students.index') }}" class="bg-slate-700 text-white px-4 py-2 rounded-md">Cancel</button>
        <button type="submit" class="bg-slate-700 hover:bg-opacity-90 text-white px-4 py-2 rounded-md">Update</button>
    </form>
</div>
@endsection