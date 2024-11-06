<div class="sidebar">
    <nav>
        <ul>
            <a href="{{ route('beranda') }}"><li class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</li></a>
            <a href="{{ route('daftar-bahan-baku') }}"><li class="{{ request()->routeIs('daftar-bahan-baku') ? 'active' : '' }}">Manajemen Bahan Baku</li></a>
            <a href="{{ route('daftar-produksi') }}"><li class="{{ request()->routeIs('daftar-produksi') ? 'active' : '' }}">Manajemen Produksi</li></a>
            <a href="{{ route('daftar-produk-jadi') }}"><li class="{{ request()->routeIs('daftar-produk-jadi') ? 'active' : '' }}">Manajemen Produk Jadi</li></a>
            <a href="{{ route('daftar-pesanan') }}"><li class="{{ request()->routeIs('daftar-pesanan') ? 'active' : '' }}">Manajemen Pesanan</li></a>
            <a href="{{ route('daftar-alat') }}"><li class="{{ request()->routeIs('daftar-alat') ? 'active' : '' }}">Manajemen Alat Produksi</li></a>
        </ul>
    </nav>
</div>