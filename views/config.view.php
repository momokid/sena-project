<?php

include "views/partials/head.php";

include "views/partials/aside.php";

include "views/partials/nav.php";
?>

<div class="container-fluid py-4">
    <div class="col-xl-12 col-sm-6 mb-4">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Classroom Setup</h4>
                            <div class="row mt-3">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" class="text-start">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Classroom Name</label>
                                <input type="text" class="form-control" id="new_classroom_name">
                            </div>
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Classroom Size</label>
                                <input type="text" class="form-control" id="new_classroom_size">
                            </div>
                            <div class="text-center">
                                <button type="button" id="btn_save_new_classroom" class="btn bg-gradient-primary w-100 my-4 mb-2">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Admission Fee Setup</h4>
                            <div class="row mt-3">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" class="text-start">

                            <div class="form-floating mb-3">
                                <select class="form-select select_classroom" id="select_classroom_admission_fee" aria-label="Floating label select example">
                                </select>
                                <label for="floatingSelect">Click to See Options</label>
                            </div>

                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Admission Fee Amount</label>
                                <input type="number" class="form-control" id="txt_admission_fee_amount">
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2" id="btn_set_admission_fee">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">School Fees Setup</h4>
                            <div class="row mt-3">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" class="text-start">

                            <div class="form-floating mb-3">
                                <select class="form-select select_classroom" id="select_classroom_admission_fee" aria-label="Floating label select example">
                                </select>
                                <label for="floatingSelect">Click to See Options</label>
                            </div>

                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">School Fee Amount</label>
                                <input type="number" class="form-control" id="txt_admission_fee_amount">
                            </div>

                            <div class="text-center">
                                <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>


        <div class="row mt-5">
            <div class="col-lg-4 col-md-8 col-12">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Class/ Subject Mapping</h4>
                            <div class="row mt-3">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" class="text-start">

                            <div class="form-floating mb-4">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    
                                </select>
                                <label for="floatingSelect">Click to See Options</label>
                            </div>

                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    
                                </select>
                                <label for="floatingSelect">Click to See Options</label>
                            </div>

                            <div class="text-center">
                                <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">Save</button>
                            </div>

                        </form>
                    </div>
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
