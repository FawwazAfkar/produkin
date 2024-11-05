<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Sesuaikan dengan file CSS Anda -->
</head>
<body>
    <div class="login-container" style="display: flex; min-height: 100vh; align-items: center; justify-content: center; background-color: #f5f7fa;">
        <div class="login-card" style="display: flex; width: 80%; max-width: 900px; background-color: #ffffff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); overflow: hidden;">
            <div style="padding: 2rem; width: 50%; display: flex; flex-direction: column; justify-content: center;">
                <h1 style="font-size: 24px; font-weight: bold; text-align: center;">Masuk</h1>

                <!-- Menampilkan Pesan Error Jika Login Gagal -->
                @if ($errors->any())
                    <div style="color: #ff4d4d; background-color: #ffe6e6; padding: 0.75rem; border-radius: 4px; margin-bottom: 1rem; text-align: center;">
                        <strong>{{ $errors->first() }}</strong>
                    </div>
                @endif

                <!-- Form Login -->
                <form method="POST" action="{{ route('login.post') }}" style="margin-top: 1rem;">
                    @csrf
                    <div style="margin-bottom: 1rem;">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Masukkan disini" required style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px;">
                    </div>

                    <div style="margin-bottom: 1rem;">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="*******" required style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 4px;">
                    </div>

                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
                        <div>
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Ingat aku</label>
                        </div>
                        <!-- Arahkan langsung ke halaman reset-password -->
                        <a href="{{ route('password.reset', ['token' => 'dummy-token']) }}" style="text-decoration: none; color: #555;">Lupa kata sandi?</a>
                    </div>

                    <button type="submit" style="width: 100%; padding: 0.75rem; background-color: #333; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Masuk</button>
                </form>
            </div>
            
            <div style="background-color: #e9edf5; flex: 1; display: flex; align-items: center; justify-content: center;">
                <img src="https://via.placeholder.com/150" alt="Logo" style="max-width: 80%;">
            </div>
        </div>

        <footer style="text-align: center; padding: 1rem; background-color: #f1f1f1; font-size: 14px; width: 100%; position: fixed; bottom: 0;">
            &copy; Copyright ERP For Production 2024. All Rights Reserved
        </footer>
    </div>
</body>
</html>
