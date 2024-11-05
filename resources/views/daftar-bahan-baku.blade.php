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
                                <th>ID Bahan Baku</th>
                                <th>Nama Bahan</th>
                                <th>Stok Tersedia</th>
                                <th>Status Produksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>BB001</td>
                                <td>Kayu Jati</td>
                                <td>150 kg</td>
                                <td><span class="status available">Tersedia</span></td>
                                <td>
                                    <button class="btn btn-primary"><i class='bx bx-info-circle'></i></button>
                                    <button class="btn btn-warning"><i class='bx bx-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>BB002</td>
                                <td>Papan MDF</td>
                                <td>75 kg</td>
                                <td><span class="status in-progress">Proses Pengadaan</span></td>
                                <td>
                                    <button class="btn btn-primary"><i class='bx bx-info-circle'></i></button>
                                    <button class="btn btn-warning"><i class='bx bx-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>BB003</td>
                                <td>Paku</td>
                                <td>10 kg</td>
                                <td><span class="status in-progress">Proses Pengadaan</span></td>
                                <td>
                                    <button class="btn btn-primary"><i class='bx bx-info-circle'></i></button>
                                    <button class="btn btn-warning"><i class='bx bx-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>BB004</td>
                                <td>Lem</td>
                                <td>14 kg</td>
                                <td><span class="status in-progress">Proses Pengadaan</span></td>
                                <td>
                                    <button class="btn btn-primary"><i class='bx bx-info-circle'></i></button>
                                    <button class="btn btn-warning"><i class='bx bx-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                            <!-- Tambahkan baris data lainnya di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
