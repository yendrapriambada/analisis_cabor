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
            <?php
            if ($this->session->userdata('name_user') !== null) {
              $avatarName = $this->session->userdata('name_user');
              $avatarUrl = "https://api.dicebear.com/7.x/initials/svg?seed=" . urlencode($avatarName);
            } else {
              $avatarName = 'Guest';
              $avatarUrl = "https://api.dicebear.com/7.x/initials/svg?seed=" . urlencode($avatarName);
            }
            ?>
            

            <?php
            if (!($this->session->userdata('role_id') == NULL)) {
            ?>
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img class="ml-2" src="<?php echo $avatarUrl; ?>" alt="avatar" />

                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <p class="dropdown-item mt-2"><?= $avatarName ?></p>
                  <hr>
                  <?php if ($this->session->userdata('role_id') == 1) { ?>
                    <div class="dropdown-item" style="display: flex; justify-content: center; align-items: center;" readonly="true">
                      <p class="badge bg-primary ml-2 mr-2 mb-0 text-white">
                        Administrator
                      </p>
                    </div>
                  <?php } else if ($this->session->userdata('role_id') == 2) { ?>
                    <div class="dropdown-item" style="display: flex; justify-content: center; align-items: center;" readonly="true">
                      <p class="badge bg-success ml-2 mr-2 mb-0">
                        Member
                      </p>
                    </div>
                  <?php } else if ($this->session->userdata('role_id') == 3) { ?>
                    <div class="dropdown-item text-white" style="display: flex; justify-content: center; align-items: center;" readonly="true">
                      <p class="badge bg-secondary ml-2 mr-2 mb-0">
                        Unverified User
                      </p>
                    </div>
                  <?php } ?>

                  <a href="<?php echo base_url() . 'user/C_index_user/editProfil' ?>" class="dropdown-item">
                    <i class="ti-settings text-primary"></i>
                    Edit Profil
                  </a>
                  <a class="dropdown-item" href="<?php echo base_url() . 'auth/C_login/logout' ?>">
                    <i class="ti-power-off text-primary"></i>
                    Logout
                  </a>
                </div>

              <?php } else { ?>
                <img class="ml-2" src="<?php echo $avatarUrl; ?>" alt="avatar" />
              <?php } ?>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>