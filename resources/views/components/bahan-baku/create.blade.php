<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP for Production</title>
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
    /* General styling */
    body {
        font-family: 'Nunito', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }

    /* Navbar styling */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f8f9fa;
        padding: 10px 20px;
        border-bottom: 1px solid #ddd;
    }

    .navbar-title {
        font-weight: bold;
        font-size: 1.5rem;
    }

    .user-profile {
        font-size: 1rem;
    }

    /* Sidebar styling */
    .sidebar {
        background-color: #f8f9fa;
        padding-top: 20px;
        height: 100vh;
        border-right: 1px solid #ddd;
    }

    .sidebar .logo {
        display: flex;
        justify-content: center;
        padding-bottom: 10px;
    }

    .sidebar .nav-link {
        color: #333;
        padding: 10px 20px;
        text-decoration: none;
        display: block;
        font-weight: bold;
    }

    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
        background-color: #d1d1d1;
        border-radius: 4px;
    }

    /* Main content styling */
    .main-content {
        padding: 20px;
    }

    .breadcrumb {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 20px;
    }

    .form-card {
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        max-width: 500px;
        margin: 0 auto;
    }

    .form-title {
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Form inputs */
    .form-control,
    .form-select {
        border-radius: 5px;
    }

    .btn-dark {
        width: 100%;
        background-color: #333;
        color: white;
        font-weight: bold;
    }

    /* Footer styling */
    .footer {
        background-color: #f8f9fa;
        text-align: center;
        padding: 10px;
        font-size: 0.9rem;
        color: #666;
        border-top: 1px solid #ddd;
    }

</style>

</head>
<body>

    <!-- Navbar -->
    <header class="navbar">
        <h1 class="navbar-title">ERP FOR PRODUCTION</h1>
        <div class="user-profile">
            <span>Nama Lengkap</span>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 sidebar">
                <div class="logo">
                    <i class='bx bx-image' style="font-size: 50px;"></i>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Manajemen Bahan Baku</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Manajemen Produksi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Manajemen Produk Jadi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Manajemen Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Manajemen Alat Produksi</a>
                    </li>
                </ul>
            </aside>

            <!-- Main Content -->
            <main class="col-md-9 main-content">
                <div class="breadcrumb">Manajemen Bahan Baku > Tambah Barang</div>
                <div class="card form-card">
                    <h2 class="form-title">Tambah Bahan</h2>
                    <form>
                        <div class="mb-3">
                            <label for="idBahan" class="form-label">ID Bahan Baku</label>
                            <input type="text" id="idBahan" class="form-control" value="BB001" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="namaBahan" class="form-label">Nama Bahan</label>
                            <input type="text" id="namaBahan" class="form-control" value="Kayu Jati">
                        </div>
                        <div class="mb-3">
                            <label for="stokTersedia" class="form-label">Stok Tersedia</label>
                            <input type="text" id="stokTersedia" class="form-control" value="150 kg">
                        </div>
                        <div class="mb-3">
                            <label for="stokMinimum" class="form-label">Stok Minimum</label>
                            <input type="text" id="stokMinimum" class="form-control" value="200 kg">
                        </div>
                        <div class="mb-3">
                            <label for="statusProduksi" class="form-label">Status Produksi</label>
                            <select id="statusProduksi" class="form-select">
                                <option>Tersedia</option>
                                <option>Tidak Tersedia</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-dark">Kirim</button>
                    </form>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        © Copyright ERP For Production 2024. All Right Reserved
    </footer>

</body>
</html>
