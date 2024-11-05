@extends('layouts.app')


@section('content')
<!-- Main Content -->
<div class="outer-card">
    <!-- Card besar untuk seluruh konten dalam main-content -->
    <div class="card">
                <div class="card-header">
                    <h2>Tabel Produksi Terbaru</h2>
                    <div class="card-actions">
                        <button class="btn download">Download Report</button>
                        <button class="btn add">Tambah Produksi Barang</button>
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
                                <th>ID Produksi</th>
                                <th>Tanggal Mulai Produksi</th>
                                <th>Tanggal Selesai Produksi</th>
                                <th>Status Produksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PKK001</td>
                                <td>17 Agustus 1945</td>
                                <td>01 September 1945</td>
                                <td><span class="status available">Dalam Proses</span></td>
                                <td>
                                    <button class="btn btn-primary"><i class='bx bx-info-circle'></i></button>
                                    <button class="btn btn-warning"><i class='bx bx-edit'></i></button>
                                    <button class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>PMM002</td>
                                <td>29 Juni 2023</td>
                                <td>30 Juli 2023</td>
                                <td><span class="status in-progress">Selesai</span></td>
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
