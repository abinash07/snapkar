<?php require_once('includes/header.php'); ?>

<main id="main" class="main">
    <section class="section profile">
        <div class="container">
            <div class="card" style="box-shadow: none;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h5 class="card-title mb-0 p-0">Add New Locality</h5>
                    </div>
                    <form id="localityForm" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-3">
                            <label for="name" class="form-label">State</label>
                            <select class="form-select" id="state" name="state" required>
                                <option value="" selected="">Select State</option>
                            </select>
                            <div class="invalid-feedback">Please</div>
                        </div>
                        <div class="col-md-3">
                            <label for="email" class="form-label">City</label>
                            <select class="form-select" id="city" name="city" required>
                                <option value="" selected="">Select City</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-3">
                            <label for="username" class="form-label">Sub City</label>
                            <select class="form-select" id="sub_city" name="sub_city" required>
                                <option value="" selected="">Select Sub City</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-3">
                            <label for="company" class="col-md-4 col-lg-3 form-label">Locality</label>
                            <input type="text" class="form-control" name="locality" id="locality" placeholder="Enter your locality" required>
                            <div class="invalid-feedback" id="localityError"></div>
                        </div>
                        <div id="localityAlert" class="mt-3"></div>
                        <div class="col-12 d-flex gap-2 mt-4">
                            <button type="submit" id="saveAccount" class="btn btn-primary">
                                <span class="button-text">Submit</span>
                                <span class="spinner-border spinner-border-sm ms-2 d-none" role="status"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once('includes/footer.php'); ?>

<script>
    getStateData();
    function getStateData(){
        $.ajax({
            url: "<?= $base_url; ?>api/get_state_master.php",
            type: "POST",
            data: JSON.stringify({auth_key: auth_key}),
            dataType: "json",
            cache: false,
            success: function(data){
                $.each(data.result, function(key, val) {
                    $('#state').append(
                        `<option value="${val.id}">${val.name}</option>`
                    );
                });
            }
        });
    }

    $('#state').change(function(){
        $('#city').html('');
        var state_id = $('#state').val();
        $.ajax({
            url: "<?= $base_url; ?>api/get_city_master.php",
            type: "POST",
            data: JSON.stringify({auth_key: auth_key, state_id: state_id}),
            dataType: "json",
            cache: false,
            success: function(data){
                $.each(data.result, function(key, val) {
                    $('#city').append(
                        `<option value="${val.id}">${val.name}</option>`
                    );
                });
            }
        });
    });

    $('#city').change(function(){
        $('#sub_city').html('');
        var city_id = $('#city').val();
        $.ajax({
            url: "<?= $base_url; ?>api/get_sub_city_master.php",
            type: "POST",
            data: JSON.stringify({auth_key: auth_key, city_id: city_id}),
            dataType: "json",
            cache: false,
            success: function(data){
                $.each(data.result, function(key, val) {
                    $('#sub_city').append(
                        `<option value="${val.id}">${val.name}</option>`
                    );
                });
            }
        });
    });




    $("#localityForm").on("submit", function (e) {
        e.preventDefault();


        let isValid = true;

        const locality = $("#locality").val().trim();
        const namePattern = /^[A-Za-z0-9\s\-.,]+$/;
        if (!namePattern.test(locality)) {
            $("#localityError").text("Email is required."); 
            $("#locality").addClass("is-invalid");
            isValid = false;
        }else{
            $("#localityError").text(""); 
            $("#locality").addClass("is-valid");
            isValid = true;
        }

        if (!isValid) return;

    

        const $btn = $("#saveAccount");
        const $spinner = $('<span class="spinner-border spinner-border-sm ms-2"></span>');
        const $alert = $("#localityAlert");

        // Disable button + show loader
        $btn.prop("disabled", true);
        $btn.find(".button-text").text("Saving...");
        $btn.find(".spinner-border").removeClass("d-none");


        const payload = {
            auth_key: auth_key,
            state: $("#state").val(),
            city: $("#city").val(),
            sub_city: $("#sub_city").val(),
            locality: $("#locality").val().trim()
        };

        $.ajax({
            url: "<?= $base_url; ?>api/insert_new_location.php",
            type: "POST",
            enctype: "multipart/form-data",
            data: JSON.stringify(payload),
            dataType: "json",
            success: function (res) {
                if (res.status) {
                    $("#localityForm")[0].reset();
                    $alert.html(`
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle me-1"></i>
                            ${res.message || "Locality saved successfully!"}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    `);
                    window.location.href = "<?= $base_url; ?>";
                } else {
                    $alert.html(`
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle me-1"></i>
                            ${res.message || "Failed to save locality!"}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    `);
                }

                setTimeout(() => {
                    $(".alert").fadeOut(500, function () {
                        $(this).remove();
                    });
                }, 3000);
            },

            error: function () {
                $alert.html(`
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-octagon me-1"></i>
                        Server error! Please try again later.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `);

                setTimeout(() => {
                    $(".alert").fadeOut(500, function () {
                        $(this).remove();
                    });
                }, 3000);
            },

            complete: function () {
                $btn.prop("disabled", false);
                $btn.find(".button-text").text("Submit");
                $btn.find(".spinner-border").addClass("d-none");
            }
        });
    });




    

</script>