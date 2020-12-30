<?php include 'header.php'; ?>
<div class="jumbotron text-center">
  <h1>This is Register Page</h1>
  <p>Register Complete kindly!</p>
</div>

<div class="container">
  <div class="row justify-content-center">
    <form action="checking.php" method="POST">
      <div class="form-group">
        <label for="usr">User name:</label>
        <input type="text" class="form-control" id="usr" name="username" placeholder="Please Enter your user name" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" placeholder="Please Enter your password" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label for="pwd">Confirm Password :</label>
        <input type="password" class="form-control" id="pwd" name="confirm_password"
          placeholder="Please Enter your password" autocomplete="off" required>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <p><a href="login.php">Already</a> have an account?</P>
    </form>
  </div>
</div>
<?php include 'footer.php'; ?>
