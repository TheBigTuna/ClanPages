<?php include "nav.php" ?>

<div class="container jumbotron">
    <h3 class="text-center" style="margin-top:-1rem">Create Your Clan</h3>
    <hr style="margin-bottom:2.5rem">
    <form class="container mt-4" id="needs-validation" novalidate action="clan.php">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom01">Clan name</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Enter a name for your clan" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Event</option>
                    <option>Community</option>
                    <option>Academic</option>
                    <option>Other</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="exampleFormControlTextarea1">Clan description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter a description for your clan" required></textarea>
                <div class="invalid-feedback">
                    Please provide a valid description.
                </div>
            </div>

            <div class="col-md-6 mt-1">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Choose a logo for your clan</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
        </div>
        <center><button class="btn btn-primary btn-lg mt-3 mb-0" type="submit">Create Clan</button></center>
    </form>

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        "use strict";
        window.addEventListener("load", function() {
            var form = document.getElementById("needs-validation");
            form.addEventListener("submit", function(event) {
                if (form.checkValidity() == false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            }, false);
        }, false);
    }());
    </script>
</div>
