
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark border-bottom" style="background:#563d7c; height: 75px;">
    <a href="#" class="ms-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarcollapse" aria-expanded="false" aria-controls="sidebarcollapse" role="button"><i class="fa-solid fa-bars"></i>
    </a>
    <div class="container-fluid justify-content-start">
        <img src="https://cdn-icons-png.flaticon.com/512/1801/1801656.png" style="width: 50px;" alt="">
        <span class="navbar-brand mx-3">Manajemen Peternakan</span>
        
    </div>
    <a onclick="confirmlogout()" href="../../../index.php?hasil=logout" class="btn btn-danger float-end mx-3">Logout</a>
</nav>
<!-- Sidebar -->
<div class="d-flex bd-highlight">
    <div class="collapse show" id="sidebarcollapse">
        <div id="sidebargate" class="d-flex flex-column flex-shrink-0 p-3 text-white" style="background:#563d7c; width: 200px; min-height:550px;">
            <h3 class="mx-4 mt-2">Menu</h3>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto mx-3">
                <li>
                    <a id="homenav" href="../../content/landing/landing.php" class="nav-link text-white" >
                    Home
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a id="bidang_data" href="#" class="nav-link text-white dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Bidang Data
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a id="data_pakan" class="dropdown-item" href="../../content/pakan/data_pakan.php">Data Pakan</a></li>
                        <li><a id="data_ayam" class="dropdown-item" href="../../content/ayam/data_ayam.php">Data Ayam</a></li>
                    </ul>
                </li>
                <li>
                    <a id="stok_telur" href="../../content/stok/stok_telur.php" class="nav-link text-white">
                    Stok Telur
                    </a>
                </li>
                <li>
                    <a id="customers" href="../customers/customers.php" class="nav-link text-white">
                    Customers
                    </a>
                </li>
                <li>
                    <a id="obat_hama" href="../obat/obat_hama.php" class="nav-link text-white">
                    Obat Hama
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Crystal_Clear_kdm_user_female.svg/1200px-Crystal_Clear_kdm_user_female.svg.png" alt="" class="rounded-circle me-2" width="32" height="32">
                <strong>Martharissa</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" onclick="confirmlogout()" href="../../../index.php?hasil=logout">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>


