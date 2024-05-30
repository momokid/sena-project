<?php

include "views/partials/head.php";

include "views/partials/aside.php";

include "views/partials/nav.php";
?>

<div class="container-fluid py-4">
    <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
        <div class="row">
            <div class="col-lg-12 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">New Student Registration</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-6 col-md-8 col-12 mx-auto">

                                <form role="form" class="text-start">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="new_student_fullname">
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="new_student_dob">
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Residence Address</label>
                                        <input class="form-control" id="new_student_residence_address" rows="2"></input>
                                    </div>

                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Last School Attended</label>
                                        <input type="text" class="form-control" id="new_student_last_school_attended">
                                    </div>

                                    
                                </form>
                            </div>

                            <div class="col-lg-6 col-md-8 col-12 mx-auto">

                                <form role="form" class="text-start">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Parent/ Guardian Name</label>
                                        <input type="text" class="form-control" id="new_student_parent_guardian_name">
                                    </div>

                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Parent/ Guardian Tel. No.</label>
                                        <input type="text" class="form-control" id="new_student_parent_guardian_telno">
                                    </div>
                                    
                                    <div class="form-floating mb-3">
                                        <select class="form-select select_classroom" id="new_student_class_admitted" aria-label="Floating label select example">
                                        </select>
                                        <label for="floatingSelect">Select Class Admitted</label>
                                    </div>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="text-center">
                    <button type="button" id="btn_new_Student_registatrion" class="btn bg-gradient-primary w-100 my-4 mb-2">Register New Student</button>
                </div>
            </div>

        </div>

    </div>

</div>
</main>


<?php

include "assets/configurator.php";

include "assets/js.php";

include "views/partials/footer.php";
