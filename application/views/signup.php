<?php include('header.php'); ?>
<div class="container">
  <h1 class="text-center">Sign Up</h1>

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
      <?php
      echo form_error('first_name');
      echo form_error('last_name');
      echo form_error('email');
      echo form_error('password');
      ?>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-12 col-sm-12">
      <form class="form" action="<?php echo base_url(); ?>User/doRegister" method="post">
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <label for="first_name">First Name</label>
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="text" name="first_name" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <label for="last_name">Last Name</label>
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="text" name="last_name" class="form-control">
            </div>
          </div>
        </div>
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
              <label for="gender">Gender</label>
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="radio" name="gender" value="male"> Male
              <input type="radio" name="gender" value="female"> Female
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <label for="hobby">Hobby</label>
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="checkbox" name="hobby[]" value="reading"> Reading
              <input type="checkbox" name="hobby[]" value="computing"> Computing
              <input type="checkbox" name="hobby[]" value="writing"> Writing
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <label for="country_id">Country</label>
            </div>
            <div class="col-md-6 col-sm-6">
              <select class="form-control" name="country_id">
                <option value="default">Select Country</option>
                <?php foreach ($countries as $c): ?>
                  <option value="<?php echo $c->id; ?>"><?php echo $c->country_name; ?></option>
                <?php endforeach; ?>
              </select>
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
              <label for="cp">Confirm Password</label>
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="password" name="cp" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <button type="submit" name="btnReg" class="btn btn-success">Register</button>
            </div>
            <div class="col-md-6 col-sm-6">
              <button type="reset" name="btnReg" class="btn btn-primary">Reset</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
