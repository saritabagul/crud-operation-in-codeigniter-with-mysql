<?php include('public_header.php'); ?>

<div class="container">
	
	
		<?php echo form_open('login/admin_login'); ?>
  <fieldset>
   <legend>Admin Login</legend>

<?php
if( $error = $this->session->flashdata('login_failed')): ?>
   <div class="row">
     <div class="col-lg-6">
       <div class="alert alert-dismissible alert-danger">
        <?= $error ?>
  <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
     </div>
   </div>

<?php endif; ?>

   <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <?php echo form_input(['name'=>'username','class'=>'form-control', 'id'=>'exampleInputEmail1','aria-describedby'=>'emailHelp','placeholder'=>'Enter Username','value'=>set_value('username')]);?>
    </div>
        </div>
        <div class="col-lg-6">
          <?php echo form_error('username');?>
        </div>
      </div>
    
     <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
  <?php echo form_password(['name'=>'password','class'=>'form-control', 'id'=>'exampleInputPassword1', 'placeholder'=>'Password']);?>

     
    </div>
        </div>
        <div class="col-lg-6">
          <?php echo form_error('password');?>
        </div>
      </div>
    
    
    </fieldset>
    <?php echo form_reset(['name'=>'reset','value'=>'Reset', 'class'=>'btn btn-secondary']);?>
    <?php echo form_submit(['name'=>'submit','value'=>'Login', 'class'=>'btn btn-primary']);?>

  </fieldset>

  
</form>
</div>