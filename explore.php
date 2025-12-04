<?php require_once('includes/header.php'); ?>
    <style>
        .input-group .form-control:focus {
            box-shadow: none;
        }
        .location-card {
            background: #fff;
            border-left: 4px solid #0B7DDA;
            transition: 0.2s;
        }
        .location-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 12px rgba(0,0,0,0.1);
        }
        .left-icon {
            width: 55px;
            height: 55px;
            background: #F0F0F0;
            border-radius: 8px;
            font-size: 28px;
        }
        .location-title {
            font-size: 15px;
            font-weight: 600;
            font-family: 'Open Sans', sans-serif;
        }
        .fa-gradient {
            background: linear-gradient(#D50F0F, #f00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .verified i {
            font-size: 15px;
            color: #0B7DDA;
            margin-left: 5px;
        }
        .cityname {
            font-size: 13px;
            color: #666;
        }
        .peoples {
            font-size: 12px;
            color: #444;
        }
        .btn-follow {
            background: #0B7DDA;
            color: #fff;
            font-size: 12px;
            padding: 6px 14px;
            border-radius: 3px;
            border: none;
        }
        .btn-follow:hover {
            background: #086bb8;
        }
    </style>
    <main id="main" class="main">
        <section class="section profile">
            <div class="container my-3">

                <div class="row mb-4 ">
                    <div class="col-md-12 mx-auto">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search location...">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
               

                <div class="location-card d-flex align-items-center p-3 mb-3 shadow-sm rounded">
                    <div class="left-icon d-flex align-items-center justify-content-center me-3">
                        <i class="bi bi-geo-alt-fill fa-gradient"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="location-title mb-1">
                            Bhagada
                            <span class="verified"><i class="bi bi-patch-check-fill"></i></span>
                        </p>
                        <p class="cityname mb-1">Bhandaripokahri, Bhadrak, Odisha</p>
                        <p class="peoples mb-0"><i class="bi bi-people-fill"></i> 150 People</p>
                    </div>
                    <div class="follow-btn">
                        <button class="btn btn-follow">Follow</button>
                    </div>
                </div>

                <div class="location-card d-flex align-items-center p-3 mb-3 shadow-sm rounded">
                    <div class="left-icon d-flex align-items-center justify-content-center me-3">
                        <i class="bi bi-geo-alt-fill fa-gradient"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="location-title mb-1">
                            Tesinga
                            <span class="verified"><i class="bi bi-patch-check-fill"></i></span>
                        </p>
                        <p class="cityname mb-1">Bhandaripokahri, Bhadrak, Odisha</p>
                        <p class="peoples mb-0"><i class="bi bi-people-fill"></i> 150 People</p>
                    </div>
                    <div class="follow-btn">
                        <button class="btn btn-follow">Follow</button>
                    </div>
                </div>

                <div class="location-card d-flex align-items-center p-3 mb-3 shadow-sm rounded">
                    <div class="left-icon d-flex align-items-center justify-content-center me-3">
                        <i class="bi bi-geo-alt-fill fa-gradient"></i>
                    </div>
                    <div class="flex-grow-1">
                        <p class="location-title mb-1">
                            Kulana
                            <span class="verified"><i class="bi bi-patch-check-fill"></i></span>
                        </p>
                        <p class="cityname mb-1">Bhandaripokahri, Bhadrak, Odisha</p>
                        <p class="peoples mb-0"><i class="bi bi-people-fill"></i> 150 People</p>
                    </div>
                    <div class="follow-btn">
                        <button class="btn btn-follow">Follow</button>
                    </div>
                </div>

            </div>
        </section>
    </main>
<?php require_once('includes/footer.php'); ?>