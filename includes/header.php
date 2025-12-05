<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard - Skill Gap</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="assets/img/site.webmanifest">
    <meta name="theme-color" content="#ffffff">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?= $base_url; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $base_url; ?>assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?= $base_url; ?>assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        const auth_key = localStorage.getItem("auth_key");
        const currentPage = window.location.pathname.split("/").pop();
        if (!auth_key) {
            window.location.href = "<?= $base_url; ?>login";
        } else {
            $.ajax({
                url: "<?= $base_url; ?>api/verify_auth_key.php",
                type: "POST",
                data: JSON.stringify({ auth_key: auth_key }),
                dataType: "json",
                success: function(res) {
                    if (!res.status) {
                        localStorage.clear();
                        window.location.href = "<?= $base_url; ?>login";
                    }else{
                        var homeCheck = localStorage.getItem("home");                        
                        if ((homeCheck === null || homeCheck === "" || homeCheck === "null" || homeCheck === "undefined") && currentPage !== "addlocation") {
                            window.location.href = "<?= $base_url; ?>addlocation";
                        }else{
                            document.body.style.display = "block";
                        }
                    }
                },
                error: function() {
                    console.log("Token verify failed");
                }
            });
        }
    </script>
</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <i class="bi bi-list toggle-sidebar-btn d-block d-sm-none"></i>
                <a href="<?= $base_url; ?>" class="logo d-flex align-items-center">
                    <img src="assets/img/logo.png" alt="">
                    <span class="">SkillGap</span>
                </a>
            </div>

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">
                    <!-- <li class="nav-item me-3">
                        <a class="btn btn-primary btn-sm" href="<?= $base_url; ?>addpost">
                            <i class="bi bi-plus-circle-dotted"></i> <span class="d-none d-lg-inline">Add Post</span>
                        </a>
                    </li>
                    <li class="nav-item me-1">
                        <a class="nav-link nav-icon" href="<?= $base_url; ?>search">
                            <i class="bi bi-search"></i>
                        </a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="<?= $base_url; ?>myaccount">
                            <img src="<?= $base_url; ?>/assets/img/user-img.png" alt="Profile" class="rounded-circle">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <div class="sidebar-header">
            <div class="user-avatar">AN</div>
            <div class="user-info">
                <h5>Abinash Nayak</h5>
                <small>employee</small>
            </div>
        </div>

        <nav class="sidebar-nav">
            <div class="nav-item">
                <a href="#" class="nav-link2 active" data-section="dashboard">
                    <i class="bi bi-grid"></i> Dashboard
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link2" data-section="assessments">
                    <i class="bi bi-journal-text"></i> Assessments
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link2" data-section="skills-matrix">
                    <i class="bi bi-bullseye"></i> Skills Matrix
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link2" data-section="progress">
                    <i class="bi bi-bar-chart"></i>
                    Progress
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link2" data-section="recommendations">
                    <i class="bi bi-lightbulb"></i>
                    Recommendations
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link2" data-section="profile">
                    <i class="bi bi-person"></i>
                    Profile
                </a>
            </div>
        </nav>

        <div style="position: absolute; bottom: 2rem; left: 1.5rem; right: 1.5rem;">
            <p>© Copyright 2025, Skill Gap</p>
        </div>
    </aside>