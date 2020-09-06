<?php include('header.php'); ?>
<div class="container">
  <h1 class="text-center">Login</h1>

  <?php if($msg = $this->session->flashdata('sucess')): ?>
  <div class="row">
      <div class="col-lg-12 alert alert-success" style="margin-top:40px;">
      <?php echo $msg; ?>
      </div>
  </div>
  <?php elseif($msg = $this->session->flashdata('error')): ?>
  <div class="row">
  <div class="col-lg-12 alert alert-danger" style="margin-top:40px;">
      <?php echo $msg; ?>
  </div>
  </div>
  <?php endif; ?>

  <div class="row mt-5">
    <div class="col-md-12 col-sm-12">
      <form class="form" action="<?php echo base_url(); ?>User/doLogin" method="post">
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <label for="email">Email</label>
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="text" name="email" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <label for="password">Password</label>
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="password" name="password" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <button type="submit" name="btnReg" class="btn btn-success">Login</button>
            </div>
            <div class="col-md-6 col-sm-6">
              <a href="<?php echo base_url(); ?>User/index" name="btnCreate" class="btn btn-primary">Sign Up</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
