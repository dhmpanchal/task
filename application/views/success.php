<?php include('header.php'); ?>
<div class="container">
  <h2>Welcome... <strong><?php echo $this->session->userdata('uid'); ?></strong> <a href="<?php echo base_url(); ?>User/logout">Logout</a> </h2>

  <div class="row mt-5">
    <div class="col-md-12 col-sm-12">
      <table border="1" class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Hobbies</th>
            <th>Country</th>
          </tr>
        </thead>
        <tbody>
          <?php if(count($users)): ?>
            <?php $c = 0; ?>
            <?php foreach ($users as $user): ?>
            <tr>
              <td><?php echo ++$c; ?></td>
              <td><?php echo $user->first_name; ?></td>
              <td><?php echo $user->last_name; ?></td>
              <td><?php echo $user->email; ?></td>
              <td><?php echo $user->gender; ?></td>
              <td><?php echo $user->hobby; ?></td>
              <td>
                <?php
                $this->load->model('UserModel','userModel');
                $country = $this->userModel->getCountryName($user->country_id);
                echo $country;
                ?>
              </td>
            </tr>
            <?php endforeach; ?>
          <?php else: ?>
          <tr>
            <td colspan="7">There is no data available.</td>
          </tr>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
