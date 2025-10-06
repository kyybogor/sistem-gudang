<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">SYSTEM GUDANG</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Base</div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data</span>
        </a>
        <div id="collapseTwo" class="collapse">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Tambah Produk</a>
                <a class="collapse-item" href="#">Tambah Supplier/Customer</a>
                <a class="collapse-item" href="#">Tambah Bank</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Transaction</div>
    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fw fa-sign-in-alt"></i><span>Barang Masuk</span></a></li>
    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fw fa-sign-out-alt"></i><span>Barang Keluar</span></a></li>
    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fw fa-table"></i><span>Harga Modal</span></a></li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Report</div>
    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fw fa-table"></i><span>Laporan Stok</span></a></li>
    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fw fa-chart-area"></i><span>Laporan Barang Masuk</span></a></li>
    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fw fa-chart-area"></i><span>Laporan Barang Keluar</span></a></li>
    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fw fa-chart-area"></i><span>Laporan Jatuh Tempo</span></a></li>
    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-fw fa-table"></i><span>Laporan Piutang</span></a></li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline p-3">
        <button class="btn w-100 text-white" id="sidebarToggle">
            <i class="fas fa-angle-double-left me-2"></i>
            <span class="toggle-text"></span>
        </button>
    </div>
</ul>

<style>
    #accordionSidebar {
        width: 250px;
        transition: width 0.3s;
        background-color: #1a001f;
    }
    #accordionSidebar.collapsed {
        width: 80px;
    }
    #accordionSidebar.collapsed .nav-link span,
    #accordionSidebar.collapsed .sidebar-brand-text,
    #accordionSidebar.collapsed .sidebar-heading {
        display: none;
    }
    #accordionSidebar.collapsed .nav-link {
        text-align: center;
    }

    #accordionSidebar .nav-link,
    #accordionSidebar .sidebar-brand-text,
    #accordionSidebar .sidebar-heading {
        color: #ffffff !important;
    }

    #sidebarToggle {
        background-color: #510151;
        border: none;
    }
    #sidebarToggle:hover {
        background-color: #6a056a;
    }
</style>

<script>
    document.getElementById('sidebarToggle').addEventListener('click', function () {
        let sidebar = document.getElementById('accordionSidebar');
        let toggleText = document.querySelector('#sidebarToggle .toggle-text');
        let toggleIcon = document.querySelector('#sidebarToggle i');

        sidebar.classList.toggle('collapsed');

        if (sidebar.classList.contains('collapsed')) {
            toggleText.textContent = 'Besarkan';
            toggleIcon.classList.remove('fa-angle-double-left');
            toggleIcon.classList.add('fa-angle-double-right');
        } else {
            toggleText.textContent = 'Kecilkan';
            toggleIcon.classList.remove('fa-angle-double-right');
            toggleIcon.classList.add('fa-angle-double-left');
        }
    });
</script>
