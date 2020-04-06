<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
        <a class="navbar-brand" href=""><img src="assets/img/logo.png" height="50" width="30">Getih User</a>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/edit');?>">
         <i class="fas fa-fw fa-edit"></i>
          <span>Edit Profile</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
      <!-- Nav Item -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('stock');?>">
          <i class="fas fa-fw fa-burn"></i>
          <span>Stock Darah</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pendonor');?>">
         <i class="fas fa-fw fa-user"></i>
          <span>Daftar Pendonor</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
      <!-- Nav Item - Charts -->
        <a class="nav-link" href="<?= base_url('user/changepass');?>">
         <i class="fas fa-fw fa-key"></i>
          <span>Change Password</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
