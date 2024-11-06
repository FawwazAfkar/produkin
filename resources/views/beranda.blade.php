@extends('layouts.app')

@section('content')  
<!-- adds div class outer-card here -->
<div class="outer-card">
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
            <canvas id="monthlyProductionChart"></canvas>
        </div>
        <div class="chart">
            <h3>Penggunaan Bahan Baku Utama</h3>
            <canvas id="mainMaterialUsageChart"></canvas>
        </div>
        <div class="chart">
            <h3>Distribusi Status Pesanan</h3>
            <canvas id="orderStatusDistributionChart"></canvas>
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
                    <td><span class="status completed">Selesai</span></td>
                </tr>
                <tr>
                    <td>P0002</td>
                    <td>Kursi</td>
                    <td>13/05/2024 2:10:45 PM</td>
                    <td>13/05/2024 2:10:45 PM</td>
                    <td><span class="status in-progress">Dalam Proses</span></td>
                </tr>
                <!-- Add more rows as necessary -->
            </tbody>
        </table>
        
    </div>
</div>
    
@endsection

