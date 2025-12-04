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
                        <p>Software Engineer</p>

                        <button class="btn btn-primary btn-sm mb-3 mt-2" style="font-size: 13px;">Follow</button>
                        <a href="<?= $base_url; ?>editprofile" class="btn btn-primary btn-sm mb-3 mt-2" style="font-size: 13px;">Message</a>
                        <a href="<?= $base_url; ?>settings" class="btn btn-primary btn-sm mb-3 mt-2" style="font-size: 13px;"><i class="bi bi-three-dots-vertical"></i></a>

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
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card" style="box-shadow: none;">
                        <div class="card-body pt-3">
                            <h5 class="fw-bold text-primary mb-1">Intro</h5>
                            <p class="mb-2 text-muted" id="lintro">Hi, you can knock me!</p>
                            
                            <ul class="list-unstyled mb-0" style="font-size: 14px;">
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

                            <div class="social-icon mt-4">
                                <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                                <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php require_once('includes/footer.php'); ?>