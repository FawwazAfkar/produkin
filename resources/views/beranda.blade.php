@extends('layouts.app')

@section('content')
<div class="dashboard-container">    
    <!-- Statistics Cards -->
    <div class="stats-container">
        <div class="stat-card">
            <p class="stat-number">10</p>
            <p class="stat-label">Total Produksi Hari Ini</p>
            <button class="detail-button">Klik Detail</button>
        </div>
        <div class="stat-card">
            <p class="stat-number">10</p>
            <p class="stat-label">Stok Bahan Baku Tersedia</p>
            <button class="detail-button">Klik Detail</button>
        </div>
        <div class="stat-card">
            <p class="stat-number">10</p>
            <p class="stat-label">Pesanan dalam Proses</p>
            <button class="detail-button">Klik Detail</button>
        </div>
        <div class="stat-card">
            <p class="stat-number">10</p>
            <p class="stat-label">Produk Siap Dikirim</p>
            <button class="detail-button">Klik Detail</button>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="charts-container">
        <div class="chart">
            <h3>Tren Produksi Bulanan</h3>
            <!-- Insert chart component here (e.g., Chart.js or other library) -->
        </div>
        <div class="chart">
            <h3>Penggunaan Bahan Baku Utama</h3>
            <!-- Insert chart component here -->
        </div>
        <div class="chart">
            <h3>Distribusi Status Pesanan</h3>
            <!-- Insert chart component here -->
        </div>
    </div>

    <!-- Recent Production Table -->
    <div class="table-container">
        <h3>Tabel Produksi Terbaru</h3>
        <table class="production-table">
            <thead>
                <tr>
                    <th>ID Produksi</th>
                    <th>Nama Produk</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Status Produksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>P0001</td>
                    <td>Meja</td>
                    <td>13/05/2024 2:10:45 PM</td>
                    <td>13/05/2024 2:10:45 PM</td>
                    <td>Selesai</td>
                </tr>
                <tr>
                    <td>P0002</td>
                    <td>Kursi</td>
                    <td>13/05/2024 2:10:45 PM</td>
                    <td>13/05/2024 2:10:45 PM</td>
                    <td>Dalam Proses</td>
                </tr>
                <!-- Add more rows as necessary -->
            </tbody>
        </table>
    </div>
</div>
@endsection

<style>
/* Container Styling */
.dashboard-container {
    padding: 20px;
    font-family: Arial, sans-serif;
}

/* Dashboard Title */
.dashboard-title {
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
}

/* Statistics Section */
.stats-container {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-bottom: 20px;
}

.stat-card {
    width: 180px;
    background-color: #fff;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.stat-number {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
}

.stat-label {
    font-size: 1rem;
    color: #666;
}

.detail-button {
    background-color: #e0e0e0;
    border: none;
    padding: 5px 10px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 0.9rem;
}

/* Charts Section */
.charts-container {
    display: flex;
    gap: 20px;
    justify-content: space-around;
    margin-bottom: 20px;
}

.chart {
    width: 30%;
    background-color: #fff;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Table Section */
.table-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.production-table {
    width: 100%;
    border-collapse: collapse;
}

.production-table th, .production-table td {
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.production-table th {
    background-color: #f2f2f2;
    color: #333;
}

.production-table td {
    color: #666;
}
</style>
