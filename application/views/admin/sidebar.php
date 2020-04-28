<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('admin');?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-tint"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
       <div class="sidebar-heading">
        Menu
      </div>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
      <a class="nav-link" href="<?=base_url('admin');?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>
      <!-- Nav Item - Dashboard -->
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-tint"></i>
          <span>Stock Darah</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Stock Darah</h6>
            <a class="collapse-item" href="<?=base_url('admin/input');?>">Input</a>
            <a class="collapse-item" href="<?=base_url('admin/stock');?>">Update</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
            <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/pendonor');?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Pendonor</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Sidebar Toggler (Sidebar) -->
      

    </ul>
    <!-- End of Sidebar -->
