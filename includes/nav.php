<?php
    $isLoggedIn = isLoggedIn();
    $isAdmin = isAdmin();
    if (isset($_SESSION['avatar'])) {
        $navIcon = APP_BASE_PATH . "/" . htmlentities($_SESSION['avatar']);
    }
?>
<nav class="navbar navbar-expand-lg sticky-top bg-light shadow">
    <div class="container-fluid d-flex m-0 p-0">
        <!-- Messageboard icon & home link -->
        <div class="d-flex">
            <ul class="navbar-nav mx-auto">
                <li id="brand-container" class="nav-item">
                    <a id="brand-link" class="nav-link" href="<?= INDEX_URL; ?>">
                        <img id="brand-icon" src="<?= ICON_HOME; ?>" alt="Brand icon">Messageboard
                    </a>
                </li>
            </ul>
        </div>
        <!-- Avatar dropdown if logged in -->
        <?php if ($isLoggedIn): ?>
            <div class="dropdown float-end">
                <a id="avatar-dropdown" class="navbar-brand m-0 dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img id="profile-icon" src="<?= $navIcon ?>" alt="Profile icon">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="avatar-dropdown">
                    <li><a class="dropdown-item nav-dropdown-item" href="<?= PROFILE_URL; ?>">View Profile</a></li>
                    <?php if ($isAdmin): ?>
                        <li><a class="dropdown-item nav-dropdown-item" href="<?= ADMIN_URL; ?>">Admin Panel</a></li>
                    <?php endif; ?>
                    <li><a class="dropdown-item nav-dropdown-item" href="<?= ACCOUNT_URL; ?>">Account Settings</a></li>
                    <li><a class="dropdown-item nav-dropdown-item text-danger" href="<?= LOGOUT_URL; ?>">Logout</a></li>
                </ul>
            </div>
        <!-- Not logged in - redirect to login.php -->
        <?php else: ?>
            <a class="navbar-brand float-end m-0" href="<?= LOGIN_URL; ?>">
                <i id="avatar-icon" class="bi bi-person-circle" alt="Avatar icon"></i>
            </a>
        <?php endif; ?>
    </div>
</nav>