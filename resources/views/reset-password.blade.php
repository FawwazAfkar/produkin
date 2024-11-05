{{-- sementara belum styling     --}}
    <div class="main-content">
        @vite('resources/css/app.css')
        <section class="content">
            <div class="table-container">
                <h2>Reset Password</h2>
                <form action="" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="">
                    <div class="form-group
                    @error('email')
                        has-error
                    @enderror">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group
                    @error('password')
                        has-error
                    @enderror">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group
                    @error('password_confirmation')
                        has-error
                    @enderror">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation">
                        @error('password_confirmation')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit">Reset Password</button>
                </form>
            </div>
        </section>
    </div>
