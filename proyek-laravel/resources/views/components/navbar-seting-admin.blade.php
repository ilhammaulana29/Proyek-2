<p class="fs-3 fw-semibold">Setting</p>
<div class="daftar-seting shadow-sm p-3 mt-3">
    <a href="/seting-profil-admin" class="profile text-decoration-none text-black fw-semibold {{ request()->is('seting-profil-admin*') ? 'active' : ''   }}">Profile</a>
    <a href="/seting-toko-admin" class="toko text-decoration-none ms-5 text-black fw-semibold {{ request()->is('seting-toko-admin*') ? 'active' : ''   }}">Toko</a>
</div>