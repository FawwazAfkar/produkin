@extends('layouts.app')


@section('content')
<!-- Main Content -->
<div class="outer-card">
    <!-- Card besar untuk seluruh konten dalam main-content -->
    <div class="card">
        <div class="card-header">
            <h2>Tambah Bahan</h2>
        </div>
        
        <!-- Form untuk Tambah Bahan Baku -->
        <div class="card-body">
            <form>
                        <div class="mb-3">
                            <label for="idBahan" class="form-label">ID Bahan Baku</label>
                            <input type="text" id="idBahan" class="form-control" value="P005" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input type="text" id="namaProduk" class="form-control" value="Meja">
                        </div>
                        <div class="mb-3">
                            <label for="bahanBaku" class="form-label">Bahan Baku</label>
                            <select id="bahanBaku" class="form-select">
                                <option selected>Kayu Jati</option>
                                <option>Cat Melamin</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="catatanBahan" class="form-label">Catatan Bahan Baku</label>
                            <input type="text" id="catatanBahan" class="form-control" value="50 kg Kayu Jati, 10 liter Cat Melamin">
                        </div>
                        <div class="mb-3">
                            <label for="tanggalMulai" class="form-label">Tanggal Mulai Produksi</label>
                            <input type="date" id="tanggalMulai" class="form-control" value="2024-01-12">
                        </div>
                        <div class="mb-3">
                            <label for="jamMulai" class="form-label">Jam Mulai Produksi</label>
                            <input type="time" id="jamMulai" class="form-control" value="08:00">
                        </div>
                        <div class="mb-3">
                            <label for="tanggalSelesai" class="form-label">Tanggal Selesai Produksi</label>
                            <input type="date" id="tanggalSelesai" class="form-control" value="2024-01-12">
                        </div>
                        <div class="mb-3">
                            <label for="jamSelesai" class="form-label">Jam Selesai Produksi</label>
                            <input type="time" id="jamSelesai" class="form-control" value="16:00">
                        </div>
                        <div class="mb-3">
                            <label for="jumlahProduksi" class="form-label">Jumlah Produksi</label>
                            <input type="text" id="jumlahProduksi" class="form-control" value="100 unit">
                        </div>
                        <div class="mb-3">
                            <label for="statusProduksi" class="form-label">Status Produksi</label>
                            <select id="statusProduksi" class="form-select">
                                <option selected>Dalam Proses</option>
                                <option>Selesai</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="operator" class="form-label">Operator Penanggung Jawab</label>
                            <input type="text" id="operator" class="form-control" value="Budi">
                        </div>
                        <div class="mb-3">
                            <label for="catatanProduksi" class="form-label">Catatan Produksi</label>
                            <input type="text" id="catatanProduksi" class="form-control" placeholder="Pastikan standar kualitas.">
                        </div>
                        <button type="submit" class="btn btn-dark">Kirim</button>
                    </form>
        </div>
    </div>
</div>
@endsection