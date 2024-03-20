<div class="col-2 bg-sidebar sidebar p-3 min-vh-100 position-fixed">
    <div class="text-center border-bottom mb-4 d-flex justify-content-center align-items-center flex-column">
        <img src="{{ asset('img/logo1.png') }}" alt="" width="70px" class="mt-3 mb-3 d-none d-sm-block">
        <p class="mt-1 text-light mb-3">Kariermu.</p>
    </div>
    <ul class="p-0 d-flex flex-column gap-2 d-flex justify-content-center align-items-center">
        <li class="list-group list w-100 text-medium cursor-pointer {{ ($title == "Dashboard") ? 'list-active' : '' }} text-center text-md-start">
            {{-- paddingnya di a href --}}
            <a href="/dashboard" class="a-icon d-none d-md-block py-2 px-3"><i class="fa-solid fa-house-chimney-user me-3"></i>Dashboard</a>
            <a href="/dashboard" class="a-icon text-center d-block d-md-none py-2 px-3 text-center"><i class="fa-solid fa-house-chimney-user"></i></a>
        </li>
        <li class="list-group list w-100 text-medium cursor-pointer {{ ($title == "Data Guru") ? 'list-active' : '' }} text-center text-md-start">
            <a href="/guru" class="a-icon d-none d-md-block py-2 px-3"><i class="fa-solid fa-chalkboard-user me-3"></i>Guru</a>
            <a href="/guru" class="a-icon text-center d-block d-md-none py-2 px-3 text-center"><i class="fa-solid fa-chalkboard-user"></i></a>
        </li>
        <li class="list-group list w-100 text-medium cursor-pointer {{ ($title == "Data Siswa") ? 'list-active' : '' }} text-center text-md-start">
            <a href="/siswa" class="a-icon d-none d-md-block py-2 px-3"><i class="fa-solid fa-graduation-cap me-3"></i>Siswa</a>
            <a href="/siswa" class="a-icon d-block d-md-none py-2 px-3 text-center"><i class="fa-solid fa-graduation-cap"></i></a>
        </li>
        <li class="list-group list w-100 text-medium cursor-pointer {{ ($title == "Data Karir") ? 'list-active' : '' }} text-center text-md-start">
            <a href="/karir" class="a-icon d-none d-md-block py-2 px-3"><i class="fa-solid fa-briefcase me-3"></i>Data Karir</a>
            <a href="/karir" class="a-icon d-block d-md-none py-2 px-3"><i class="fa-solid fa-briefcase"></i></a>
        </li>
        <li class="list-group list w-100 text-medium cursor-pointer {{ ($title == "Data Nilai") ? 'list-active' : '' }} text-center text-md-start">
            <a href="/nilai" class="a-icon d-none d-md-block py-2 px-3"><i class="fa-solid fa-chart-column me-3"></i>Data Nilai</a>
            <a href="/nilai" class="a-icon d-block d-md-none py-2 px-3"><i class="fa-solid fa-chart-column"></i></a>
        </li>
        <li class="list-group list-logout w-100 text-medium cursor-pointer text-center text-md-start">
            <a href="" class="a-icon d-none d-md-block py-2 px-3"><i class="fa-solid fa-right-from-bracket me-3"></i>Logout</a>
            <a href="" class="a-icon d-block d-md-none py-2 px-3"><i class="fa-solid fa-right-from-bracket"></i></a>
        </li>
    </ul>
</div>
