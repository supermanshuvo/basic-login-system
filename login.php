<?php include 'header.php'; ?>
<div class="jumbotron text-center">
  <h1>This is Login Page</h1>
  <p>Complete Login Process kindly!</p>
</div>

<div class="container">
  <div class="row justify-content-center">
    <form action="security.php" method="POST">
      <div class="form-group">
        <label for="usr">User name:</label>
        <input type="text" class="form-control" id="usr" name="username" placeholder="Please Enter your user name" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" placeholder="Please Enter your password" autocomplete="off" required>
      </div>
      <button type="submit" class="btn btn-success" name="submit">Submit</button>
      <a href="register.php" class="btn btn-primary">Create New account</a>
    </form>
  </div>
</div>
<?php include 'footer.php'; ?>