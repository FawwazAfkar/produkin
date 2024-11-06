@extends('layouts.app')


@section('content')
<!-- Main Content -->
<div class="outer-card">
    <!-- Card besar untuk seluruh konten dalam main-content -->
    <div class="card">
                <div class="card-header">
                    <h2>Tabel Produk Jadi</h2>
                    <div class="card-actions">
                        <button class="btn download">Download Report</button>
                        <button class="btn add">Tambah Produk Jadi</button>
                    </div>
                </div>
                
                <!-- Bagian Filter -->
                <div class="card-body">
                    <div class="filter">
                        <input type="text" placeholder="Cari...">
                        <input type="date" value="2023-01-01">
                        <input type="date" value="2023-01-31">
                    </div>
                    
                    <!-- Tabel Daftar Produksi -->
                    <table>
                        <thead>
                            <tr>
                                <th>ID Produk</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Bahan Baku</th>
                                <th>Stok Tersedia</th>
                                <th>Harga</th>
                                <th>Status Produksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PJ001</td>
                                <td>Meja</td>
                                <td>Furniture</td>
                                <td>Kayu Jati, Papan MDF</td>
                                <td>10</td>
                                <td>Rp 500.000</td>
                                <td><span class="status available">Tersedia</span></td>
                                <td>
                                    <button class="btn btn-warning"><i class='bx bx-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>PJ002</td>
                                <td>Kursi</td>
                                <td>Furniture</td>
                                <td>Kayu Jati, Busa</td>
                                <td>5</td>
                                <td>Rp 300.000</td>
                                <td><span class="status available">Tersedia</span></td>
                                <td>
                                    <button class="btn btn-warning"><i class='bx bx-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>PJ003</td>
                                <td>Lemari</td>
                                <td>Furniture</td>
                                <td>Kayu Jati, Kaca</td>
                                <td>3</td>
                                <td>Rp 1.000.000</td>
                                <td><span class="status available">Tersedia</span></td>
                                <td>
                                    <button class="btn btn-warning"><i class='bx bx-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
