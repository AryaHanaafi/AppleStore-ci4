<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>

<?php
$username = ['name' => 'username', 'id' => 'username', 'class' => 'form-control bg-light', 'placeholder' => 'Enter username'];
$password = ['name' => 'password', 'id' => 'password', 'class' => 'form-control bg-light', 'placeholder' => 'Enter password', 'type' => 'password'];
?>

<section class="min-vh-100 d-flex align-items-center justify-content-center bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">

                <div class="p-5 shadow rounded-4 bg-white">

                    <!-- Logo & Heading -->
                    <div class="text-center mb-4">
                        <img src="<?= base_url('NiceAdmin/assets/img/iplogo.svg') ?>" alt="Logo" width="60"
                            class="mb-2">
                        <h2 class="fw-semibold">Sign in to Apple Panel</h2>
                        <p class="text-muted">Use your Apple ID to continue</p>
                    </div>

                    <!-- Flash message -->
                    <?php if (session()->getFlashData('failed')): ?>
                        <div class="alert alert-danger text-center">
                            <?= session()->getFlashData('failed') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Form -->
                    <?= form_open('login') ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                            <?= form_input($username) ?>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-lock"></i></span>
                            <?= form_password($password) ?>
                            <button type="button" class="btn btn-outline-secondary border-start-0" id="togglePassword">
                                <i class="bi bi-eye" id="toggleIcon"></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-grid mb-3">
                        <?= form_submit('submit', 'Login', ['class' => 'btn btn-dark rounded-pill py-2']) ?>
                    </div>
                    <?= form_close() ?>

                    <div class="text-center text-muted mt-3 small">
                        Belum punya akun? <a href="#" class="text-decoration-none">Daftar</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- JS untuk toggle password -->
<script>
    const toggleBtn = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');

    toggleBtn.addEventListener('click', () => {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        toggleIcon.classList.toggle('bi-eye');
        toggleIcon.classList.toggle('bi-eye-slash');
    });
</script>

<?= $this->endSection() ?>