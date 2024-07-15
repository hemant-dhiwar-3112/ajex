<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Demo</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-fluid bg-warning text-light py-1">
        <div class="col-12">
            <h3 style="text-align: center;">Ajax With PHP</h3>
        </div>
    </div>
    <div class="container border border-dark" style="background: linear-gradient(#d156e9,rgb(99 220 223));">
        <div class="row text-light border-bottom border-black bg-info">
            <div class="col-5 d-block py-1 offset-7">
                <div class="form-group float-end">
                    <input type="text" name="" id="search" class="float-end me-4 form-control w-50">
                    <label for="search" class="text-dark float-end me-4">
                        <h4>Search :</h4>
                    </label>
                </div>
            </div>
        </div>
        <div class="text-dark" style="font-size: 16px;">
            <form id="submit-form">
                <div class="form-row ">
                    <div class="row">
                        <div class="col-4 offset-1">
                            <div class="form-group mt-1">
                                <label for="inputname">Name</label>
                                <input type="text" class="form-control" id="inputname">
                                <div class="" id="mess1">

                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="inputemail">Email</label>
                                <input type="email" class="form-control " id="inputemail">
                                <div class="" id="mess2">

                                </div>
                            </div>

                        </div>

                        <div class="col-4 mt-1 offset-1">
                            <div class="form-group mt-1">
                                <label for="inputphone">Phone No.</label>
                                <input type="text" class="form-control " id="inputphone">
                                <div class="" id="mess3">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputcity">City</label>
                                <input type="text" class="form-control " id="inputcity">
                                <div class="" id="mess4">

                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label> Select Course : </label>
                                <select class=" form-select" id="inlineFormCustomSelect">
                                    <optgroup label="UG Course">
                                        <option value="BCA">BCA</option>
                                        <option value="BSC">BCS</option>
                                        <option value="B.Com">B.Com</option>
                                        <option value="BBA">BBA</option>
                                        <option value="BA">BA</option>
                                    </optgroup>
                                    <optgroup label="PG Course">
                                        <option value="MCA" selected>MCA</option>
                                        <option value="MSC">MCS</option>
                                        <option value="M.Com">M.Com</option>
                                        <option value="MBA">MBA</option>
                                        <option value="MA">MA</option>
                                    </optgroup>
                                </select>
                            </div> -->

                            <!-- <label>Select Gender : </label><br>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="grnder" id="dd" class="form-check-input">
                                <label for="d" class="form-check-label">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="grnder" id="dd" class="form-check-input">
                                <label for="dd" class="form-check-label">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="grnder" id="dd" class="form-check-input">
                                <label for="ddd" class="form-check-label">Other</label>
                            </div><br> -->
                        </div>
                        <!-- <div class="col-6">
                            <label>Select Hoady : </label><br>
                            <div class="form-check form-check">
                                <input type="checkbox" class="form-check-input" id="1">
                                <label class="form-check-label" for="1">Read</label>
                            </div>
                             <div class="form-check form-check">
                                <input type="checkbox" class="form-check-input" id="2">
                                <label class="form-check-label" for="2">Traveling</label>
                            </div>
                            <div class="form-check form-check">
                                <input type="checkbox" class="form-check-input" id="3">
                                <label class="form-check-label" for="3">Gaming</label>
                            </div>
                        </div> -->
                    </div>
                </div><br>
                <div class="row">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary" id="btnclick">Save</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="modal">
            <div id="modal-form">
                <h2>Edit Form</h2>
                <table cellpadding="10px" width="100%">
                </table>
                <div id="close-btn">X</div>
            </div>
        </div>

        <div id="table-pagi">

        </div>
    </div>

    <script src="./js/jquery.js"></script>
    <script>
        $(document).ready(function () {
            function loadtable(page_id) {
                $.ajax({
                    url: "ajax-read.php",
                    type: "POST",
                    data: { page: page_id },
                    success: function (data) {
                        $("#table-pagi").html(data);
                    }
                });
            };
            loadtable();


            //pagination
            $(document).on("click", ".sele", function (e) {
                e.preventDefault();
                var page_id = $(this).attr("id");
                loadtable(page_id);
            });


            // live search
            $("#search").on("keyup", function () {
                var item = $(this).val();
                if (item == "") {
                    loadtable();
                }
                $.ajax({
                    url: "ajax-live.php",
                    type: "POST",
                    data: { search_item: item },
                    success: function (data) {
                        $("#table-pagi").html(data);
                    }
                });
            });



            //insert
            $('#btnclick').on('click', function (e) {
                e.preventDefault();
                var name = $("#inputname").val();
                var email = $("#inputemail").val();
                var phone = $("#inputphone").val();
                var city = $("#inputcity").val();
                $.ajax({
                    url: "ajax-insert.php",
                    type: "POST",
                    data: { full_Name: name, Email: email, Phone: phone, city: city },
                    success: function (data) {
                        if (data == 1) {
                            loadtable();
                            $("#submit-form").trigger("reset");
                        }
                    }
                });
            });


            //update
            $(document).on("click", "#edit", function (e) {

                $("#modal").show();
                var Id = $(this).data("id");

                $.ajax({
                    url: "load-update.php",
                    type: "POST",
                    data: { id: Id },
                    success: function (data) {
                        $("#modal-form table").html(data);
                    }
                });
            });

            $("#close-btn").on("click", function () {
                $("#modal").hide();
            });


            $(document).on("click", "#edit-submit", function () {
                var Id = $("#id").val();
                var name = $("#name").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var city = $("#city").val();

                $.ajax({
                    url: "ajax-update.php",
                    type: "POST",
                    data: { id: Id, name: name, email: email, phone: phone, city: city },
                    success: function (data) {
                        if (data == 1) {
                            $("#modal").hide();
                            loadtable();
                        }
                    }
                })
            });



            // delete
            $(document).on("click", "#del", function (e) {
                var Id = $(this).data("id");
                var element = this;

                $.ajax({
                    url: "ajax-delete.php",
                    type: "POST",
                    data: { id: Id },
                    success: function (data) {
                        $(element).closest("tr").fadeOut();
                        // loadtable();
                    }
                });
            });
        });

    </script>

    <script src="./js/info.js"></script>

</body>

</html>