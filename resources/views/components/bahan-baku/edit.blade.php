<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bahan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
        }

        .container {
            display: flex;
            flex-direction: row;
            width: 100%;
        }

        /* Sidebar */
        .sidebar {
            width: 20%;
            background-color: #e9e9e9;
            padding: 20px;
            min-height: 100vh;
        }

        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            display: block;
            padding: 10px;
            border-radius: 5px;
        }

        .sidebar ul li a.active {
            background-color: #d3d3d3;
        }

        /* Content */
        .content {
            width: 80%;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
        }

        .card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input[readonly] {
            background-color: #e9e9e9;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #555;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #333;
        }

        footer {
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo">
            <img src="https://via.placeholder.com/150" alt="Logo" style="width: 100%; height: auto;">
        </div>
        <ul>
            <li><a href="#" class="active">Manajemen Bahan Baku</a></li>
            <li><a href="#">Manajemen Produksi</a></li>
            <li><a href="#">Manajemen Produk Jadi</a></li>
            <li><a href="#">Manajemen Pesanan</a></li>
            <li><a href="#">Manajemen Alat Produksi</a></li>
        </ul>
    </aside>

    <!-- Content -->
    <section class="content">
        <div class="header">
            <h1>ERP FOR PRODUCTION</h1>
            <div class="user-info">
                Nama Lengkap <i class="fas fa-user"></i>
            </div>
        </div>
        <div class="breadcrumb">
            <p>Manajemen Bahan Baku > Edit Barang</p>
        </div>
        <div class="card">
            <h2>Edit Bahan</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="id_bahan">ID Bahan Baku</label>
                    <input type="text" id="id_bahan" value="BB001" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_bahan">Nama Bahan</label>
                    <input type="text" id="nama_bahan" value="Kayu Jati">
                </div>
                <div class="form-group">
                    <label for="stok_tersedia">Stok Tersedia</label>
                    <input type="text" id="stok_tersedia" value="150 kg">
                </div>
                <div class="form-group">
                    <label for="stok_minimum">Stok Minimum</label>
                    <input type="text" id="stok_minimum" value="200 kg">
                </div>
                <div class="form-group">
                    <label for="status_produksi">Status Produksi</label>
                    <select id="status_produksi">
                        <option value="tersedia" selected>Tersedia</option>
                        <option value="tidak tersedia">Tidak Tersedia</option>
                    </select>
                </div>
                <button type="submit" class="btn">Edit</button>
            </form>
        </div>
    </section>
</div>

<footer>
    &copy; Copyright ERP For Production 2024. All Rights Reserved
</footer>

</body>
</html>
