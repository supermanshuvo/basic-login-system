<?php include 'header.php'; 

if(!$_SESSION['username']){
  header('Location: login.php');
  exit;
}
?>
<div class="jumbotron text-center">
  <h1>Welcome</h1>
  <h2><?php echo $_SESSION['username'];?></h2>
  <p>Thank you for register in here!</p>
  <p>Stay with us!</p>
</div>
<div class="container">
    <div class="row justify-content-center">
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</div>
<?php include 'footer.php'; ?>