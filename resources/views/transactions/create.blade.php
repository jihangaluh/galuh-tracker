@extends('layouts.app')

@section('content')
<h2>Tambah Transaksi</h2>

<form action="{{ route('transactions.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="amount" class="form-label">Jumlah</label>
        <input type="number" class="form-control" id="amount" name="amount" step="0.01" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection