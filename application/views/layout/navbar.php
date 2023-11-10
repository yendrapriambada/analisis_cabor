    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo.png" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <?php
              if ($this->session->userdata('name') !== null) {
                // If the 'name' session data is set, use it as the seed for the API call.
                $avatarName = $this->session->userdata('name');
                $avatarUrl = "https://api.dicebear.com/7.x/initials/svg?seed=" . urlencode($avatarName);
              } else {
                // Handle the case where 'name' session data is not set.
                $avatarName = 'Guest';
                $avatarUrl = "https://api.dicebear.com/7.x/initials/svg?seed=" . urlencode($avatarName);
              }
              echo $avatarName;
              ?>
              <img class="ml-2" src="<?php echo $avatarUrl; ?>" alt="avatar" />
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="ti-settings text-primary"></i>
                  Edit Profil
                </a>
                <a class="dropdown-item" href="<?php echo base_url() . 'auth/C_login/logout' ?>">
                  <i class="ti-power-off text-primary"></i>
                  Logout
                </a>
              </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>