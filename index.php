<?php require_once('includes/header.php'); ?>

<style>
    .user-card {
        position: relative;
        overflow: hidden;
        height: 220px;
        border-radius: 10px;
    }

    .user-card img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Makes image cover full card */
        transition: transform 0.3s ease;
    }

    .user-card:hover img {
        transform: scale(1.05);
    }

    .user-info {
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 8px;
        color: #fff;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
    }

    .user-info h6 {
        margin: 0;
        font-size: 14px;
        font-weight: 600;
    }

    .user-info small {
        font-size: 12px;
        opacity: 0.9;
    }
</style>

<div class="container py-4">

    <!-- Search Section -->
    <div class="row mb-4 mt-5">
        <div class="col-md-12 mx-auto">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search user...">
                <button class="btn btn-primary">Search</button>
            </div>
        </div>
    </div>

    <!-- People Grid -->
    <div class="row g-3">

        <!-- Card Item -->
        <div class="col-6 col-md-4 col-lg-2">
            <div class="user-card">
                <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="User">
                <div class="user-info">
                    <h6>John Doe</h6>
                    <small>Designer</small>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <div class="user-card">
                <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="User">
                <div class="user-info">
                    <h6>Amit Sharma</h6>
                    <small>Developer</small>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <div class="user-card">
                <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="User">
                <div class="user-info">
                    <h6>Sophia Lee</h6>
                    <small>HR Manager</small>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <div class="user-card">
                <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="User">
                <div class="user-info">
                    <h6>Rahul Verma</h6>
                    <small>Marketing</small>
                </div>
            </div>
        </div>


        <div class="col-6 col-md-4 col-lg-2">
            <div class="user-card">
                <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="User">
                <div class="user-info">
                    <h6>John Doe</h6>
                    <small>Designer</small>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <div class="user-card">
                <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="User">
                <div class="user-info">
                    <h6>Amit Sharma</h6>
                    <small>Developer</small>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <div class="user-card">
                <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="User">
                <div class="user-info">
                    <h6>Sophia Lee</h6>
                    <small>HR Manager</small>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <div class="user-card">
                <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="User">
                <div class="user-info">
                    <h6>Rahul Verma</h6>
                    <small>Marketing</small>
                </div>
            </div>
        </div>


        <div class="col-6 col-md-4 col-lg-2">
            <div class="user-card">
                <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="User">
                <div class="user-info">
                    <h6>John Doe</h6>
                    <small>Designer</small>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <div class="user-card">
                <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="User">
                <div class="user-info">
                    <h6>Amit Sharma</h6>
                    <small>Developer</small>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <div class="user-card">
                <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="User">
                <div class="user-info">
                    <h6>Sophia Lee</h6>
                    <small>HR Manager</small>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <div class="user-card">
                <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="User">
                <div class="user-info">
                    <h6>Rahul Verma</h6>
                    <small>Marketing</small>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .footer-menu {
    background: #ffffff;
    padding: 8px 0;
    border-top: 1px solid #ddd;
    height: 60px;
    z-index: 999;
}

.fitem {
    text-align: center;
    color: #333;
    font-size: 22px;
    text-decoration: none;
}

.fitem:hover {
    color: #0B7DDA;
}

/* Center big add button */
.plus-btn i {
    font-size: 30px;
    color: #0B7DDA;
}

/* Notification dot */
.notify-dot {
    position: absolute;
    top: 5px;
    right: 12px;
    width: 10px;
    height: 10px;
    background: red;
    border-radius: 50%;
}
</style>
<div class="footer-menu fixed-bottom d-flex justify-content-around align-items-center shadow-lg d-lg-none">

    <a href="index" class="fitem">
        <i class="bi bi-house-fill"></i>
    </a>

    <a href="http://localhost/snickar/home/search" class="fitem">
        <i class="bi bi-search"></i>
    </a>

    <a href="javascript:void(0);" onclick="chooseImageDialog();" class="fitem plus-btn">
        <i class="bi bi-plus-circle-fill"></i>
    </a>

    <a href="http://localhost/snickar/home/explore" class="fitem">
        <i class="bi bi-compass-fill"></i>
    </a>

    <a href="home/notification" class="fitem position-relative">
        <i class="bi bi-bell-fill"></i>
        <span class="notify-dot"></span>
    </a>

</div>

<?php require_once('includes/footer.php'); ?>