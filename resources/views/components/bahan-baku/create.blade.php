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
                <div class="form-group">
                    <label for="id-bahan">ID Bahan Baku</label>
                    <input type="text" id="id-bahan" value="BB001" disabled>
                </div>
                
                <div class="form-group">
                    <label for="nama-bahan">Nama Bahan</label>
                    <input type="text" id="nama-bahan" value="Kayu Jati">
                </div>
                
                <div class="form-group">
                    <label for="stok-tersedia">Stok Tersedia</label>
                    <input type="text" id="stok-tersedia" value="150 kg">
                </div>
                
                <div class="form-group">
                    <label for="stok-minimum">Stok Minimum</label>
                    <input type="text" id="stok-minimum" value="200 kg">
                </div>
                
                <div class="form-group">
                    <label for="status-produksi">Status Produksi</label>
                    <select id="status-produksi">
                        <option value="tersedia" selected>Tersedia</option>
                        <option value="habis">Habis</option>
                        <option value="proses">Proses Pengadaan</option>
                    </select>
                </div>
                
                <button type="submit" class="btn kirim">Kirim</button>
            </form>
        </div>
    </div>
</div>
@endsection