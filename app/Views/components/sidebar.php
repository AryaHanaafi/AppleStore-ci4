<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard (Admin/User) -->
        <li class="nav-item">
            <?php
            $role = session('role');
            $dashboardUri = $role === 'admin' ? 'admin' : 'user';
            ?>
            <a class="nav-link <?= (uri_string() == $dashboardUri) ? '' : 'collapsed' ?>"
                href="<?= base_url($dashboardUri) ?>">
                <i class="bi bi-bar-chart-line"></i>
                <span>Dashboard <?= ucfirst($role) ?></span>
            </a>
        </li>

        <!-- Home (Untuk semua role) -->
        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == '' || uri_string() == 'home') ? '' : 'collapsed' ?>"
                href="<?= base_url('home') ?>">
                <i class="bi bi-house-door"></i>
                <span>Home</span>
            </a>
        </li>

        <!-- Kategori (Untuk semua role) -->
        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'kategori') ? '' : 'collapsed' ?>"
                href="<?= base_url('kategori') ?>">
                <i class="bi bi-tags"></i>
                <span>Kategori</span>
            </a>
        </li>

        <!-- Produk (Admin & User) -->
        <?php if ($role === 'admin' || $role === 'user'): ?>
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'produk') ? '' : 'collapsed' ?>" href="<?= base_url('produk') ?>">
                    <i class="bi bi-bag"></i>
                    <span>Produk</span>
                </a>
            </li>
        <?php endif; ?>

        <!-- Kelola Produk (Admin only) -->
        <?php if ($role === 'admin'): ?>
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'kelola-produk') ? '' : 'collapsed' ?>"
                    href="<?= base_url('kelola-produk') ?>">
                    <i class="bi bi-box-seam"></i>
                    <span>Kelola Produk</span>
                </a>
            </li>
        <?php endif; ?>

    </ul>

</aside><!-- End Sidebar -->