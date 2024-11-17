<?php var_dump($product) ?>
<div class="container-fluid">
    <div class="card card-info card-outline mb-4"> <!--begin::Header-->
        <div class="card-header">
            <div class="card-title">THÊM TOUR MỚI</div>
        </div> <!--end::Header--> <!--begin::Form-->
        <form class="needs-validation" novalidate> <!--begin::Body-->
            <div class="row">
                <div class="col-8">
                    <div class="card-body"> <!--begin::Row-->
                        <div class="row g-3"> <!--begin::Col-->
                            <div class="col-md-6"> <label for="validationCustom01" class="form-label">Tiêu đề</label> <input type="text" class="form-control" id="validationCustom01" value="" placeholder="Nhập tiêu đề tour..." required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6"> <label for="validationCustom02" class="form-label">Last name</label> <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6"> <label for="validationCustomUsername" class="form-label">Username</label>
                                <div class="input-group has-validation"> <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6"> <label for="validationCustom03" class="form-label">City</label> <input type="text" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6"> <label for="validationCustom04" class="form-label">State</label> <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6"> <label for="validationCustom05" class="form-label">Zip</label> <input type="text" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                        </div> <!--end::Row-->
                    </div> <!--end::Body--> <!--begin::Footer-->
                </div>
                <div class="col-4">
                    Danh mục
                    <!-- <div class="col-sm-10 offset-sm-2"> -->
                    <div class="form-check"> <input class="form-check-input" type="checkbox" id="gridCheck1"> <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                        </label> </div>
                    <div class="form-check"> <input class="form-check-input" type="checkbox" id="gridCheck1"> <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                        </label> </div>
                    <div class="form-check"> <input class="form-check-input" type="checkbox" id="gridCheck1"> <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                        </label> </div>
                    <div class="form-check"> <input class="form-check-input" type="checkbox" id="gridCheck1"> <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                        </label> </div>
                    <div class="form-check"> <input class="form-check-input" type="checkbox" id="gridCheck1"> <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                        </label> </div>
                    <!-- </div> -->
                </div>
            </div>
            <!-- <div class="cart-body p-3">
                <label for="" class="form-label">Mô tả</label>
                <textarea name="editor" id="editor-des"></textarea>
            </div> -->
            <div class="cart-body p-3" id="group-ts-day">
                Hoạt động trong ngày
            </div>
            <div id="numCk">click</div>

            <!-- <div class="card-footer"> <button class="btn btn-info" type="submit">Submit form</button> </div> end::Footer -->
        </form> <!--end::Form--> <!--begin::JavaScript-->
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
                "use strict";

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms =
                    document.querySelectorAll(".needs-validation");

                // Loop over them and prevent submission
                Array.from(forms).forEach((form) => {
                    form.addEventListener(
                        "submit",
                        (event) => {
                            if (!form.checkValidity()) {
                                event.preventDefault();
                                event.stopPropagation();
                            }

                            form.classList.add("was-validated");
                        },
                        false
                    );
                });
            })();
        </script> <!--end::JavaScript-->
    </div>
</div>