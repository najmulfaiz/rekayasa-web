<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">201953032</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Beranda' ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Profil' ? 'active' : '' }}" href="/profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Kontak' ? 'active' : '' }}" href="/kontak">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Berita' ? 'active' : '' }}" href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Harapan' ? 'active' : '' }}" href="/harapan">Harapan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>