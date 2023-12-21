<!-- resources/views/students/index.blade.php -->

@extends('layouts.main')

@section('container')
    <div class="mx-4 my-8">
        <h1 style="font-size:30px; font:bold;" class="mb-6 no-select">Student List</h1>

        <a href="{{ route('students.create') }}" class="bg-slate-700 hover:bg-opacity-90 text-white px-4 py-2 rounded-md mb-4 inline-block">Add Student</a>

        <table class="w-full bg-white rounded-md overflow-hidden shadow-md no-select" style="font-size:15px; font:bold;">
            <thead class="bg-slate-700 text-white">
                <tr>
                    <th class="py-2 px-4 border-b">NIM</th>
                    <th class="py-2 px-4 border-b">Student's Name</th>
                    <th class="py-2 px-4 border-b">Class</th>
                    <th class="py-2 px-4 border-b">Generation</th>
                    <th class="py-2 px-4 border-b">Call-Number</th>
                    <th class="py-2 px-4 border-b">Username</th>
                    <th class="py-2 px-4 border-b">Password</th>
                    <th class="py-2 px-4 border-b">Admin ID</th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="{{ $loop->odd ? 'bg-gray-200' : 'bg-gray-300' }}">
                        <td class="py-2 px-4 border-b text-center">{{ $student->nim }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $student->namamahasiswa }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $student->kelas }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $student->angkatan }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $student->nohp }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $student->username }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $student->password }}</td>
                        <td class="py-2 px-4 border-b text-center">{{ $student->admin->namaadmin }}</td>
                       
                        <td class="py-2 px-4 border-b text-center">
                            <a href="{{ route('students.edit', $student->nim) }}" class="text-yellow-500">Edit</a>
                            <a class="mx-1">|</a>
                            <form action="{{ route('students.destroy', $student->nim) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500" onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
