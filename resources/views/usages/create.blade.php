@extends('layouts.main')
@section('container')
<div class="mx-4 my-8">
    <h1 style="font-size: 30px; font: bold;" class="mb-6 no-select">Usage Form</h1>

    <form action="{{ route('usages.store') }}" method="POST" class="no-select">
        @csrf

        <div class="mb-4">
            <label for="idbarang" class="block text-gray-700">Name of Goods</label>
            <select name="idbarang" id="idbarang" class="border border-gray-300 rounded w-full px-3 py-2" required>
                <option value="" disabled selected>--choose--</option>
                @foreach ($inventorys as $inventory)
                <option value="{{ $inventory->idbarang }}" data-jenis="{{ $inventory->jenisbarang }}" data-quantity="{{ $inventory->jumlahbarang }}">{{ $inventory->namabarang }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="jenisbarang" class="block text-gray-700">Type</label>
            <input type="text" name="jenisbarang" id="jenisbarang" class="border border-gray-300 rounded w-full px-3 py-2" disabled>
        </div>

        <div class="mb-4">
            <label for="jumlahbarang" class="block text-gray-700">Quantity Available</label>
            <input type="text" name="jumlahbarang" id="jumlahbarang" class="border border-gray-300 rounded w-full px-3 py-2" disabled>
        </div>

        <div class="mb-4">
            <label for="qtypinjam" class="block text-gray-700">Quantity Borrowed</label>
            <input type="text" name="qtypinjam" id="qtypinjam" class="border border-gray-300 rounded w-full px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label for="modifiedbydate" class="block text-gray-700">Last Modified Date</label>
            <input type="date" name="modifiedbydate" id="modifiedbydate" class="border border-gray-300 rounded w-full px-3 py-2" required readonly>
        </div>

        <div class="mb-4">
            <label for="idmatakuliah" class="block text-gray-700">Subjects</label>
            <select name="idmatakuliah" id="idmatakuliah" class="border border-gray-300 rounded w-full px-3 py-2" required>
            <option value="" disabled selected>--choose--</option>
                @foreach ($subjects as $subject)
                <option value="{{ $subject->idmatakuliah }}">{{ $subject->namamatakuliah }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-slate-700 text-white px-4 py-2 rounded-lg">Add Usage</button>
    </form>
</div>
<script>
    document.getElementById('idbarang').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        document.getElementById('jenisbarang').value = selectedOption.getAttribute('data-jenis');
        document.getElementById('jumlahbarang').value = selectedOption.getAttribute('data-quantity');
    });
</script>
@endsection