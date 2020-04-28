      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        
      <div class="container-fluid padding ">
  <div class="row text-center">
    <div class="col-md-4">
      <img src="<?= base_url('/assets/img/logo.png')?>" style="width: 100px;height: 150px">
      <a>Saatnya selamatkan sesama</a>
    </div>
  <div class="col-md-4">
    <h4>Contact Us</h4>
    <div class="footer-style-w3ls">
            <h6 class="mb-2"><span class="fa mr-1 fa-envelope-open"></span> Email</h6>
            <p>getih.donordarah@gmail.com</a></p>
          </div>
     <div class="footer-style-w3ls my-3" style="font-size: 15px;">
            <h6 class="mb-2"><span class="fa mr-1 fa-phone"></span>Phone</h6>
            <p>+62 822 1520 4677</p>
          </div>  
  </div> 
  <div class="col-md-4">
    <h4>Alamat</h4>
  <div class="footer-style-w3ls">
      <h6 class="mb-2"> <span class="fa mr-1 fa-map-marker"></span> Location</h6>
      <p>Jl. Telekomunikasi Jl. Terusan Buah Batu, Bandung.</p>
    </div>
  </div>   
  </div>
</div>
<div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Getih <?= date('Y');?> </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda yakin akan keluar dari akun anda?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout');?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('');?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('');?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('');?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script>
    $('.custom-file-input').on('change',function(){
      let fileName= $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
  </script>
  <script src="<?= base_url('');?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>