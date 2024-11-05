@extends('layouts.app')

@section('content')  
    <!-- Statistics Cards -->
    <div class="stats-container">
        <div class="stat-card">
            <span class="stat-number">10</span>
            <span class="stat-label">Total Produksi Hari Ini</span>
            <button class="detail-button">Klik Detail</button>
        </div>
        <div class="stat-card">
            <span class="stat-number">10</span>
            <span class="stat-label">Stok Bahan Baku Tersedia</span>
            <button class="detail-button">Klik Detail</button>
        </div>
        <div class="stat-card">
            <span class="stat-number">10</span>
            <span class="stat-label">Pesanan dalam Proses</span>
            <button class="detail-button">Klik Detail</button>
        </div>
        <div class="stat-card">
            <span class="stat-number">10</span>
            <span class="stat-label">Produk Siap Dikirim</span>
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

@endsection

<style>
/* Statistics Section */
.stats-container {
    display: flex; /* Use flexbox for row layout */
    justify-content: space-between; /* Space between cards */
    margin-bottom: 20px;
}

.stat-card {
    flex: 0 0 calc(25% - 10px); /* 4 cards per row, minus margin */
    background-color: #d0d0d0;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 8px; /* Rounded corners */
    height: 150px; /* Set height to 150px */
    display: flex; /* Flexbox for card contents */
    flex-direction: column; /* Column layout */
    justify-content: space-between; /* Space contents evenly */
}

.stat-number {
    margin-top: 20px;
    font-size: 2rem; /* Adjusted font size for better fit */
    font-weight: bold;
}

.stat-label {
    font-size: 0.9rem; /* Adjusted font size for better fit */
    margin-bottom: 10px; /* Reduced margin below the label */
}

.detail-button {
    background-color: #999;
    border: none;
    width: 100%;
    padding: 8px 10px;
    cursor: pointer;
    border-radius: 0px 0px 8px 8px;
    font-size: 0.9rem;
    transition: background-color 0.3s ease; /* Transition effect */
}

.detail-button:hover {
    background-color: #666; /* Darker gray on hover */
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
