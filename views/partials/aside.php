<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white"><?= SYSTEM_TITLE; ?></span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white  <?= urlis("/") ? "active bg-gradient-primary" : "" ?>" href="/">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?= urlis("/config") ? "active bg-gradient-primary" : "" ?>" href="/config">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">settings_applications</i>
          </div>
          <span class="nav-link-text ms-1">Config</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="/student-registration">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person_add</i>
          </div>
          <span class="nav-link-text ms-1">Student Registration</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="/fee">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">payments</i>
          </div>
          <span class="nav-link-text ms-1">Fees & Payments</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="/class-attendance">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">rule_folder</i>
          </div>
          <span class="nav-link-text ms-1">GradeBook</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="#ui-basic" data-bs-toggle="collapse" aria-expanded="false" aria-controls="form-elements">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">event_note</i>
          </div>
          <span class="nav-link-text ms-1">Academic Calendar</span>
        </a>
        <!-- <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item ms-1"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
          </ul>
        </div> -->
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">System Report</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="../pages/profile.html">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          </div>
          <span class="nav-link-text ms-1">Student Reports</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="/signin">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          </div>
          <span class="nav-link-text ms-1">Sign In</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">admin setup</h6>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white " href="/new-institution">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          </div>
          <span class="nav-link-text ms-1">New Institution</span>
        </a>
      </li>

    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn btn-outline-primary mt-4 w-100" href="#" type="button">Tracker</a>
    </div>
  </div>
</aside>