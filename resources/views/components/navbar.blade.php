<div class="navbar">
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>
    <h1>ERP FOR PRODUCTION</h1>
    <div class="user-profile dropdown">
        <button 
            class="btn btn-link nav-link dropdown-toggle" 
            type="button" 
            id="userDropdown" 
            data-bs-toggle="dropdown" 
            aria-expanded="false">
            Nama Lengkap
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li class="user-info">
                <span class="user-name">Nama Lengkap</span>
                <span class="user-email">email@example.com</span>
            </li>
            <hr class="dropdown-divider">
            <li>
                <a class="dropdown-item" href="#">
                    <i class='bx bxs-user'></i> Kelola User
                </a>
            </li>
            <hr class="dropdown-divider">
            <li>
                <a class="dropdown-item" href="{{ route('password.reset') }}">
                    <i class="bx bx-lock-alt"></i> Ubah Password
                </a>
            </li>
            <hr class="dropdown-divider">
            <li>
                <a class="dropdown-item" href="#">
                    <i class="bx bx-log-out"></i> Keluar
                </a>
            </li>
        </ul>
    </div>
</div>
