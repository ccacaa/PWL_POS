@extends('layout')

@section('content')
    <h1>Tambah Stok Baru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('stok.store') }}" method="POST">
        @csrf
        <label for="supplier_id">Supplier ID:</label>
        <input type="text" name="supplier_id" id="supplier_id" required>

        <label for="barang_id">Barang ID:</label>
        <input type="text" name="barang_id" id="barang_id" required>

        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" id="user_id" required>

        <label for="stok_tanggal">Tanggal Stok:</label>
        <input type="datetime-local" name="stok_tanggal" id="stok_tanggal" required>

        <label for="stok_jumlah">Jumlah Stok:</label>
        <input type="number" name="stok_jumlah" id="stok_jumlah" required>

        <button type="submit">Simpan</button>
    </form>
@endsection
