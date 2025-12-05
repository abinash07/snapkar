<?php require_once('includes/header.php'); ?>

<div class="container py-4">
    <div class="row mb-4 mt-5">
        <div class="col-md-12 mx-auto">
            <div class="input-group">
                <input type="text" id="searchInput" class="form-control" placeholder="Search user...">
                <button id="searchBtn" class="btn btn-primary">Search</button>
            </div>

            <div id="loader" class="text-center mt-3" style="display:none;">
                <div class="spinner-border" role="status"></div>
                <p class="mt-2">Searching...</p>
            </div>
        </div>
    </div>

    <div class="list-group" id="resultDiv"></div>
</div>

<?php require_once('includes/footer.php'); ?>

<script>
    $(document).ready(function(){

        $("#searchBtn").on("click", function () {
            $("#resultDiv").html("");
            let keyword = $("#searchInput").val().trim();

            if (keyword === "") {
                alert("Please enter search text");
                return;
            }

            $.ajax({
                url: "<?= $base_url; ?>api/search_location.php",
                type: "POST",
                data: JSON.stringify({ auth_key: auth_key, query: keyword }),
                dataType: "json",
                beforeSend: function () {
                    $("#loader").show();
                },
                success: function (res) {
                    if (res.status) {
                        if (res.result.length > 0) {
                            $.each(res.result, function(key, val) {
                                $('#resultDiv').append(
                                    `<a href="#" class="list-group-item list-group-item-action locationItem d-flex align-items-center" data-id="${val.id}">
                                        <i class="bi bi-geo-alt fs-4 me-3"></i>
                                        <div>
                                            <div class="fw-semibold">${val.name}, ${val.sub_city_name}</div>
                                            <small class="text-muted">${val.city}, ${val.state}</small>
                                        </div>

                                        <div class="insert-loader spinner-border spinner-border-sm text-primary d-none"></div>
                                    </a>`
                                );
                            });
                        }else{
                           $("#loader").hide();
                        $("#results").html(`<p class="text-center mt-3 text-muted">No results found</p>`); 
                        }
                    } else {
                        $("#loader").hide();
                        $("#results").html(`<p class="text-center mt-3 text-muted">No results found</p>`);
                    }
                },
                complete: function () {
                    $("#loader").hide();
                },
                error: function () {
                    $("#loader").hide();
                    alert("Something went wrong");
                }
            });
        });


        $(document).on("click", ".locationItem", function (e) {
            e.preventDefault();

            let locationId = $(this).data("id");
            let $item = $(this);
            let $loader = $item.find(".insert-loader");
            $loader.removeClass("d-none");

            $.ajax({
                url: "<?= $base_url; ?>api/update_home_town.php",
                type: "POST",
                data: JSON.stringify({
                    auth_key: auth_key,
                    location_id: locationId
                }),
                dataType: "json",
                success: function (res) {
                    $loader.addClass("d-none");

                    if (res.status) {
                        localStorage.setItem("home", locationId);
                        window.location.href = "<?= $base_url; ?>";
                    } else {
                        alert("Failed to save location!");
                    }
                },
                error: function () {
                    $loader.addClass("d-none");
                    alert("API error!");
                }
            });

        });

    });
</script>