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
                                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Local/Nick Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your local name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">DOB</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="date" class="form-control" name="email" id="Email" value="">
                                        <div class="form-text" style="font-size: 12px;">Only year will visible to public.</div>
                                    </div>
                                    
                                </div>
                                <div class="row mb-3">
                                    <label for="bio" class="col-md-4 col-lg-3 col-form-label">Bio</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea class="form-control" name="bio" id="bio" style="height: 60px">Hi you can knock me!</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="company" class="col-md-4 col-lg-3 col-form-label">Occupation</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Ex: Student, Teacher or Engineer">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="education" class="col-md-4 col-lg-3 col-form-label">Relationship Status</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select class="form-select" id="profileVisibility">
                                            <option value="public" selected="">Single</option>
                                            <option value="connections">Engaged</option>
                                            <option value="married">Married</option>
                                        </select>
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
                    <div class="card" style="box-shadow: none;">
                        <div class="card-body pt-3">
                            <form id="profileEditForm">
                                <div class="row mb-3">
                                    <label for="Link" class="col-md-4 col-lg-3 col-form-label">Instagram</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="link_one" id="link_one" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Link" class="col-md-4 col-lg-3 col-form-label">Facebook</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="link_two" id="link_two" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Link" class="col-md-4 col-lg-3 col-form-label">YouTube</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="link_two" id="link_two" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Link" class="col-md-4 col-lg-3 col-form-label">Twitter</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" name="link_three" id="link_three" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Link" class="col-md-4 col-lg-3 col-form-label">Linkedin</label>
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