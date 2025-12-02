<?php require_once('includes/header.php'); ?>

<main id="main" class="main">
    <section class="section profile">
        <div class="container">
            <div class="row">

                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="profile bg-white" style="padding: 30px 20px;">
                        <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="Profile" class="rounded-circle img-fluid mb-3" style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #E4E7FA;">
                        <h5 class="fw-semibold mb-0">Abinash Nayak</h5>
                        <p class="mb-2 fw-semibold" style="font-size: 14px; cursor: pointer;">@Abinash <i id="shareLink" class="bi bi-share text-primary"></i></p>

                        <button class="btn btn-primary btn-sm mb-3 mt-2" style="font-size: 13px;">Follow</button>
                        <button id="followBtn" class="btn btn-primary btn-sm mb-3 mt-2" style="font-size: 13px;">Message</button>
                        <a href="<?= $base_url; ?>settings" class="btn btn-primary btn-sm mb-3 mt-2" style="font-size: 13px;"><i class="bi bi-gear-fill"></i></a>

                        <p id="bio">Hi you can knock me!</p>

                        <div class="d-flex justify-content-around text-center border-top pt-3">
                            <div>
                                <h6 class="mb-0">07</h6>
                                <small class="text-muted">Views</small>
                            </div>
                            <div>
                                <h6 class="mb-0" id="follower">07</h6>
                                <small class="text-muted">Followers</small>
                            </div>
                            <div>
                                <h6 class="mb-0" id="following">07</h6>
                                <small class="text-muted">Following</small>
                            </div>
                        </div>

                        <div class="text-start mt-4 small">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-envelope-fill me-2 text-primary"></i>
                                <span>abinash@gmail.com</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-briefcase-fill me-2 text-primary"></i>
                                <span>Software Engineer</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-building me-2 text-primary"></i>
                                <span>Currently at Google</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-mortarboard-fill me-2 text-primary"></i>
                                <span>Graduate</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card" style="box-shadow: none;">
                        <div class="card-body pt-3">
                            <h5 class="fw-bold text-primary mb-3">Intro</h5>
                            <p class="mb-4 text-muted" id="lintro">Hi, you can knock me!</p>
                            
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <span class="fw-semibold text-secondary">Local Name:</span>
                                    <span class="text-dark">Yash</span>
                                </li>
                                <li class="mb-2">
                                    <span class="fw-semibold text-secondary">Living City:</span>
                                    <span class="text-dark">Bahgada, Bhadrak, Odisha</span>
                                </li>
                                <li class="mb-2">
                                    <span class="fw-semibold text-secondary">Home Town:</span>
                                    <span class="text-dark">Bhagada, Bhandaripokahri, Bhadrak</span>
                                </li>
                                <li class="mb-2">
                                    <span class="fw-semibold text-secondary">Since:</span>
                                    <span class="text-dark">1993</span>
                                </li>
                                <li>
                                    <span class="fw-semibold text-secondary">Relationship Status:</span>
                                    <span class="text-dark">Single</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php require_once('includes/footer.php'); ?>