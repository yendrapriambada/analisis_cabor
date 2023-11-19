    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item mt-0">

          <?php if ($this->session->userdata('role_id') == 2 || $this->session->userdata('role_id') == 1) { ?>
            <a class="nav-link active" href="<?php echo base_url() . 'user/C_index_user/beranda' ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Beranda</span>
            </a>
          <?php } else { ?>
            <a class="nav-link active" href="<?php echo base_url() . 'C_index/beranda' ?>">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Beranda</span>
            </a>
          <?php } ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() . 'anak/C_data_anak' ?>">
            <i class="mdi mdi-account-multiple menu-icon"></i>
            <span class="menu-title">Data Anak</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() . 'user/C_index_user/komparasiData' ?>">
            <i class="mdi mdi-chart-bar menu-icon"></i>
            <span class="menu-title">Komparasi Data</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() . 'user/C_index_user/normaPenilaian' ?>">
            <i class="mdi mdi-file-check menu-icon"></i>
            <span class="menu-title">Norma Penilaian</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() . 'user/C_index_user/panduanPenelitian' ?>">
            <i class="mdi mdi-dictionary menu-icon"></i>
            <span class="menu-title">Panduan Penelitian</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() . 'user/C_index_user/petunjukPenggunaan' ?>">
            <i class="mdi mdi-help-circle menu-icon"></i>
            <span class="menu-title">Petunjuk Penggunaan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url() . 'user/C_index_user/profilPeneliti' ?>">
            <i class="mdi mdi-account-card-details menu-icon"></i>
            <span class="menu-title">Profil Peneliti</span>
          </a>
        </li>
        <?php if ($this->session->userdata('role_id') == NULL) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() . 'auth/C_register' ?>">
              <i class="mdi mdi-account-plus menu-icon"></i>
              <span class="menu-title">Registrasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() . 'auth/C_login' ?>">
              <i class="mdi mdi-login menu-icon"></i>
              <span class="menu-title">Login</span>
            </a>
          </li>
        <?php } else { ?>
          <hr width="100%">
          <li class="nav-item mt-0">
            <a class="nav-link" href="<?php echo base_url() . 'auth/C_login/logout' ?>">
              <i class="mdi mdi-logout menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        <?php } ?>

        <?php if ($this->session->userdata('role_id') == 1) { ?>
          <hr width="100%">
          <li class="nav-item mt-0">
            <a class="nav-link" href="<?php echo base_url() . 'admin/C_manage_user' ?>">
              <i class="mdi menu-icon mdi-account-settings"></i>
              <span class="menu-title">Kelola Akun User</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() . 'admin/C_set_role' ?>">
              <i class="mdi mdi-account-key menu-icon"></i>
              <span class="menu-title">Kelola Peran User</span>
            </a>
          </li>
        <?php } ?>
      </ul>
    </nav>