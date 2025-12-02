<?php require_once('includes/header.php'); ?>

<main id="main" class="main">
    <section class="section profile">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center mb-4 mb-md-0">
                    <div class="profile bg-white" style="padding: 30px 20px;">
                        <img src="<?= $base_url; ?>/assets/img/shreekrishna.jpg" alt="Profile" class="rounded-circle img-fluid mb-3" style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #E4E7FA;">
                        <br>
                        <a href="<?= $base_url; ?>editprofile" class="btn btn-primary btn-sm mb-3 mt-2" style="font-size: 13px;">Change Picture</a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card" style="box-shadow: none;">
                        <div class="card-body pt-3">
                            <form id="profileEditForm">
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="name" id="name" value="Abinash Nayak">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="email" class="form-control" name="email" id="Email" value="abinashnayak60@gmail.com">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="bio" class="col-md-4 col-lg-3 col-form-label">Bio</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea class="form-control" name="bio" id="bio" style="height: 100px">Hi you can knock me!</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Occupation</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="occupation" id="occupation" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="education" class="col-md-4 col-lg-3 col-form-label">Education</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="education" id="education" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Link" class="col-md-4 col-lg-3 col-form-label">Link 1</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="link_one" id="link_one" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Link" class="col-md-4 col-lg-3 col-form-label">Link 2</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="link_two" id="link_two" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Link" class="col-md-4 col-lg-3 col-form-label">Link 3</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="link_three" id="link_three" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Link" class="col-md-4 col-lg-3 col-form-label">Link 4</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="link_four" id="link_four" value="">
                                    </div>
                                </div>
                                <div id="profileAlert" class="mt-3"></div>

                                <input type="hidden" name="old_image" id="old_image" value="profile_6902ce513730d2_1761908622.jpeg">
                                <button type="submit" class="btn btn-primary" id="saveBtn">
                                    <span class="button-text">Save Changes</span>
                                    <span class="spinner-border spinner-border-sm ms-2 d-none" role="status"></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once('includes/footer.php'); ?>