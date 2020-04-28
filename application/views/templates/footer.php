<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<style type="text/css">
footer{
  background-color: #3f3f3f;
  color: #d5d5d5;
  padding-top: 2rem;
  flex-shrink: 0;
}
footer a{
	color: #d5d5d5;
}
hr.light-100{	
	width: 100%;
	margin-top: .8rem;
	margin-bottom: .1rem;   
}
</style>
   <footer>
        
      <div class="container-fluid padding ">
  <div class="row text-center">
    <div class="col-md-4">
      <img src="<?= base_url('/assets/img/logo.png')?>" style="width: 100px;height: 150px">
      <hr class="light">
      <a>Saatnya selamatkan sesama</a>
    </div>
  <div class="col-md-4">
    <h4>Contact Us</h4>
    <hr class="light">
    <div class="footer-style-w3ls">
            <h6 class="mb-2"><span class="fa mr-1 fa-envelope-open"></span> Email</h6>
            <p>getih.donordarah@gmail.com</a></p>
          </div>
    <hr class="light">
     <div class="footer-style-w3ls my-3" style="font-size: 15px;">
            <h6 class="mb-2"><span class="fa mr-1 fa-phone"></span>Phone</h6>
            <p>+62 822 1520 4677</p>
          </div>  
      <hr class="light">
  </div> 
  <div class="col-md-4">
    <h4>Alamat</h4>
    <hr class="light">
  <div class="footer-style-w3ls">
      <h6 class="mb-2"> <span class="fa mr-1 fa-map-marker"></span> Location</h6>
      <p>Jl. Telekomunikasi Jl. Terusan Buah Batu, Bandung.</p>
      <hr class="light">
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

</body>
</html>