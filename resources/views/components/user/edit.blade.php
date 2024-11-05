<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP for Production - Edit User</title>
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
           display: flex;
           align-items: center;
       }

       .navbar-title img {
           width: 40px; /* Adjust the size as needed */
           height: 40px;
           margin-right: 10px;
       }

       .user-profile {
           font-size: 1rem;
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
        <div class="navbar-title">
            ERP FOR PRODUCTION
        </div>
        <div class="user-profile">
            <span>Nama Lengkap</span>
        </div>
    </header>

    <div class="main-content">
        <div class="breadcrumb">Kelola User > Edit User</div>
        <div class="card form-card">
            <h2 class="form-title">Edit User</h2>
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" class="form-control" value="Ratna Dewi">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" value="ratna@example.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" value="ratna123">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select id="role" class="form-select">
                        <option selected>Supervisor</option>
                        <option>Admin</option>
                        <option>User</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark">Edit</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        © Copyright ERP For Production 2024. All Right Reserved
    </footer>

</body>
</html>
