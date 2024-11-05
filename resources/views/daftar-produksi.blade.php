@extends('layouts.app')


@section('content')
    <div class="table-container">
        <h2>Tabel Daftar Produksi Produk</h2>
        <div class="table-controls">
            <input type="text" placeholder="Cari...">
            <input type="date" value="2023-01-01">
            <input type="date" value="2023-01-31">
            <button>Download Report</button>
            <button>Tambah Produksi produk</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID Produksi</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Status Produksi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PKK001</td>
                    <td><span class="warning">17 Agustus 1945</span></td>
                    <td><span class="warning">17 Agustus 1950</span></td>
                    <td><span class="status available">Proses</span></td>
                    <td>
                        <button>Detail</button>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>PMM002</td>
                    <td><span class="warning">09 Juni 2023</span></td>
                    <td><span class="warning">27 September 2023</span></td>
                    <td><span class="status available">Proses</span></td>
                    <td>
                        <button>Detail</button>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                <!-- Tambahkan baris lain sesuai kebutuhan -->
            </tbody>
        </table>
    </div>
@endsection
