<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Reset Password</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="main-content">
        <section class="content">
            <div class="form-container">
                <div class="form-content">
                    <h2>Reset Password</h2>
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="">
                        <input type="hidden" name="email" value="{{ $email ?? old('email') }}">
                        <div class="form-group @error('password') has-error @enderror">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                            @error('password')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group @error('password_confirmation') has-error @enderror">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation">
                            @error('password_confirmation')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit">Reset Password</button>
                    </form>
                </div>
                <div class="form-image">
                    <img src="{{ asset('images/logo.png') }}" alt="Produkin Logo">
                </div>
            </div>
        </section>
    </div>
</body>
</html>