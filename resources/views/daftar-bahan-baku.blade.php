@extends('layouts.app')


@section('content')
    <div class="main-content">
        <section class="content">
            <div class="table-container">
                <h2>Tabel Daftar Bahan Baku</h2>
                <div class="table-controls">
                    <input type="text" placeholder="Cari...">
                    <input type="date" value="2023-01-01">
                    <input type="date" value="2023-01-31">
                    <button>Download Report</button>
                    <button>Tambah Bahan Baku</button>
                </div>
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
                            <td><span class="warning">150 kg</span></td>
                            <td><span class="status available">Tersedia</span></td>
                            <td>
                                <button>Detail</button>
                                <button>Edit</button>
                                <button>Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>BB002</td>
                            <td>Papan MDF</td>
                            <td>75 kg</td>
                            <td><span class="status process">Proses Pengadaan</span></td>
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
        </section>

    </div>
@endsection
