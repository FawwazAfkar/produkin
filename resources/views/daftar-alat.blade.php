@extends('layouts.app')

@section('content')
    <div class="table-container">
        <h2>Tabel Alat Produksi</h2>
        <div class="table-controls">
            <input type="text" placeholder="Cari...">
            <input type="date" value="2024-11-01">
            <input type="date" value="2024-11-02">
            <button class="btn btn-download">Download Report</button>
            <button class="btn btn-add">Tambah Alat</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID Alat</th>
                    <th>Nama Alat</th>
                    <th>Tanggal Perawatan</th>
                    <th>Catatan Perawatan</th>
                    <th>Status Pesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A001</td>
                    <td>Mesin Pemotong</td>
                    <td>15/10/2024</td>
                    <td>-</td>
                    <td><span class="status available">Tersedia</span></td>
                    <td>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>A002</td>
                    <td>Mesin Bor</td>
                    <td>10/10/2024</td>
                    <td>Perlu diperbaiki</td>
                    <td><span class="status process">Rusak</span></td>
                    <td>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>A003</td>
                    <td>Alat Pengamplasan</td>
                    <td>20/10/2024</td>
                    <td>-</td>
                    <td><span class="status available">Tersedia</span></td>
                    <td>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>A004</td>
                    <td>Alat Penggelasan</td>
                    <td>25/10/2024</td>
                    <td>Menunggu bagian baru</td>
                    <td><span class="status process">Dalam Perawatan</span></td>
                    <td>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
@endsection
