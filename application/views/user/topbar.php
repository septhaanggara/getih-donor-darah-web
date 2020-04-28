 <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <a class="navbar-brand" href="<?= base_url(); ?>user"><img src="<?= base_url('./assets/img/logo.png'); ?>" height="50" width="30"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-fw fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
             <li class="nav-item">
              <a class="nav-link" href="<?= base_url('user');?>">
              <i class="fas fa-fw fa-home"></i>
              <span>Home</span></a>
          </li>
          <ul class="navbar-nav">
             <li class="nav-item">
              <a class="nav-link" href="<?= base_url('user/stock');?>">
              <i class="fas fa-fw fa-burn"></i>
              <span>Stock Darah</span></a>
          </li>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
                <span>Daftar Pendonor</span></a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">Menu</h6>
                  <div class="font-weight-bold">
                    <a class="nav-link" href="<?= base_url('user/daftar');?>">
                    <i class="fas fa-fw fa-pencil-ruler"></i>
                    <span>Daftar Menjadi Pendonor</span></a>
                  </div>
                  <div class="font-weight-bold">
                    <a class="nav-link" href="<?= base_url('user/daftarpendonor');?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Daftar Pendonor</span></a>
                  </div>
                  <div class="font-weight-bold">
                    <a class="nav-link" href="<?= base_url('user/update');?>">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Update Data Donor</span></a>
                  </div>
                  <div class="font-weight-bold">
                    <a class="nav-link" href="<?= base_url('user/batal');?>">
                    <i class="fas fa-fw fa-eraser"></i>
                    <span>Batal Menjadi Data Donor</span></a>
                  </div>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name'];?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/'). $user['image']?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('user/edit');?>">
                  <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Profile
                </a>
                <a class="dropdown-item" href="<?= base_url('user/changepass');?>">
                  <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ubah Password
                </a>
                 <a class="dropdown-item" href="<?= base_url('auth/logout');?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->