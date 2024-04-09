<?php include_once "./includes/header.php";
?>
<div class="container" style="margin-top: 100px; max-width: 600px;margin-bottom: 60px; >



    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">SIGN UP</h3>
            </div>
            <hr>
            <form action="signup-check.php" method="post">
     	
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      class="form-control" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      class="form-control" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      class="form-control" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      class="form-control" 
                      placeholder="User Name"><br>
                      
          <?php }?>
        <label>Gender</label>
        <select name="gender" id="" class="form-control"  required>
                        <option>Male</option>
                        <option>Female</option>
                    </select></br>
        <div class="form-group">
        <label>Address</Address>
         <textarea   cols="30" rows="4" name="address" class="form-control"></textarea></div></br>

         <label>Email</label>
         <input type="text"   name="email" class="form-control" required><br>

     	<label>Password</label>
     	<input type="password"
        
                 name="password"
                 id="" 
                 class="form-control" 
                 placeholder="Password"  required><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 class="form-control" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="customer_log.php" class="ca">Already have an account?</a>
     </form>


           

        </div>
    </div>
</div>

<?php include_once "./includes/footer.php";



























