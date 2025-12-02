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



<?php require_once('includes/footer.php'); ?>