@extends('layouts.app')


@section('content')
<!-- Main Content -->
<div class="outer-card">
    <!-- Card besar untuk seluruh konten dalam main-content -->
    <div class="card">
                <div class="card-header">
                    <h2>Tabel Bahan Baku Terbaru</h2>
                    <div class="card-actions">
                        <button class="btn download">Download Report</button>
                        <button class="btn add">Tambah Bahan Baku</button>
                    </div>
                </div>
                
                <!-- Bagian Filter -->
                <div class="card-body">
                    <div class="filter">
                        <input type="text" placeholder="Cari...">
                        <input type="date" value="2023-01-01">
                        <input type="date" value="2023-01-31">
                    </div>
                    
                    <!-- Tabel Daftar Bahan Baku -->
                    <table>
            <thead>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Tanggal Pesan</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Status Pesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PS001</td>
                    <td>2023-01-15</td>
                    <td>Meja Kayu</td>
                    <td>10</td>
                    <td><span class="status processing">Diproses</span></td>
                    <td>
                        <button>Edit</button>
                        <button>Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>PS002</td>
                    <td>2023-01-18</td>
                    <td>Kursi Plastik</td>
                    <td>5</td>
                    <td><span class="status shipped">Dikirim</span></td>
                    <td>
                        <button>Edit</button>
                        <button>Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>PS003</td>
                    <td>2023-01-20</td>
                    <td>Lemari Pakaian</td>
                    <td>2</td>
                    <td><span class="status pending">Tertunda</span></td>
                    <td>
                        <button>Edit</button>
                        <button>Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>PS004</td>
                    <td>2023-01-22</td>
                    <td>Sofa Kulit</td>
                    <td>1</td>
                    <td><span class="status completed">Selesai</span></td>
                    <td>
                        <button>Edit</button>
                        <button>Hapus</button>
                    </td>
                </tr>
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
                </div>
            </div>
        </div>
@endsection
