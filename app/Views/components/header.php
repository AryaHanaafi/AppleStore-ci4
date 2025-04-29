<?php
$cart = session()->get('keranjang') ?? [];
$totalItem = array_sum(array_column($cart, 'qty'));
?>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="<?= site_url('/') ?>" class="logo d-flex align-items-center">

            <img src="<?= base_url('NiceAdmin/assets/img/iplogo.svg') ?>" class="">
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-dark badge-number">4</span>
                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have 4 new notifications
                        <a href="#"><span class="badge rounded-pill bg-dark p-2 ms-2">View all</span></a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="#">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="badge bg-dark badge-number">3</span>
                </a><!-- End Messages Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                    <li class="dropdown-header">
                        You have 3 new messages
                        <a href="#"><span class="badge rounded-pill bg-dark p-2 ms-2">View all</span></a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="#">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->
            </li><!-- End Messages Nav -->

            <li class="nav-item dropdown">
                <a class="nav-link nav-icon" href="<?= site_url('keranjang') ?>" data-bs-toggle="dropdown">
                    <i class="bi bi-cart"></i>
                    <?php if ($totalItem > 0): ?>
                        <span class="badge bg-dark badge-number"><?= $totalItem ?></span>
                    <?php endif; ?>
                </a><!-- End Keranjang Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages"
                    style="max-height: 300px; overflow-y: auto;">

                    <li class="dropdown-header">
                        Baru Ditambahkan
                        <a href="<?= site_url('keranjang') ?>">
                            <span class="badge rounded-pill bg-dark p-2 ms-2">Lihat Semua</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <?php if (!empty($cart)): ?>
                        <?php foreach ($cart as $item): ?>
                            <li class="message-item">
                                <a href="keranjang">
                                    <img src="<?= $item['gambar'] ?>" alt="<?= esc($item['nama']) ?>" class="img-fluid mb-3" />
                                    <div>
                                        <h4><?= esc($item['nama']) ?><br>
                                            <?= $item['qty'] ?> item</h4>
                                        <p>$<?= number_format($item['harga'] * $item['qty'], 0, ',', '.') ?></p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li class="message-item text-center">
                            <h6>Keranjang kosong.</h6>
                        </li>
                    <?php endif; ?>

                </ul><!-- End Keranjang Dropdown Items -->
            </li><!-- End Keranjang Nav -->

            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <?php
                    $role = session()->get('role');
                    $profileImage = ($role === 'admin') ?
                        'https://i.pinimg.com/474x/a4/d9/37/a4d93717cf6e3488dde7dd7d520425bd.jpg'
                        : 'https://i.pinimg.com/474x/cd/4b/d9/cd4bd9b0ea2807611ba3a67c331bff0b.jpg';
                    ?>

                    <img src="<?= $profileImage ?>" alt="Profile" class="rounded-circle">

                    <span class="d-none d-md-block dropdown-toggle ps-2"><?= session()->get('username'); ?>
                        (<?= session()->get('role'); ?>)</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6><?= session()->get('username'); ?></h6>
                        <span><?= session()->get('role'); ?></span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-gear"></i>
                            <span>Account Settings</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                            <i class="bi bi-question-circle"></i>
                            <span>Need Help?</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="logout">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->