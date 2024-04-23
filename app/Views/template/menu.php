<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-lime">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url() ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('logout') ?>" class="nav-link">Logout</a>
        </li>
    </ul>

</nav>


<aside class="main-sidebar sidebar-dark-lime elevation-4">

    <a href="index3.html" class="brand-link bg-danger">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">CIAPP</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
            <div class="info">
                <a href="#" class="d-block"><?= auth()->user()->username  ?? "GUEST" ?></a>
            </div>
        </div>

        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php if (auth()->user()->inGroup('admin')) : ?>
                    <li class="nav-item">
                        <a href="<?= base_url('dashboard') ?>" class="nav-link <?= (uri_string() == 'dashboard') ? 'active' : '' ?>">
                            <i class="fas fa-chart-pie nav-icon"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="<?= base_url('tickets') ?>" class="nav-link <?= (uri_string() == 'tickets') ? 'active' : '' ?>">
                        <i class="fas fa-file nav-icon"></i>
                        <p>Tickets</p>
                    </a>
                </li>
                <?php if (auth()->user()->inGroup('admin')) : ?>
                    <li class="nav-item">
                        <a href="<?= base_url('offices') ?>" class="nav-link <?= (uri_string() == 'offices') ? 'active' : '' ?>">
                            <i class="fas fa-briefcase nav-icon"></i>
                            <p>Offices</p>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>

    </div>

</aside>