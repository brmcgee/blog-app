
<?php
//put sha1() encrypted password here - example is 'hello'
$password = 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d';
$password = sha1('7247873758brm');

session_start();
if (!isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
}

if (isset($_POST['password'])) {
    if (sha1($_POST['password']) == $password) {
        $_SESSION['loggedIn'] = true;
    } else {
        header("Location: index.php?info=invalid");
        die ('Incorrect password');
    }
} 

if (!$_SESSION['loggedIn']): ?>

<?php include_once('head_section.php'); ?>

  <body>
    
    

    <div class="container mt-5">
      <p>Password needed for access, please enter password now</p>
      <form class="form-inline row" method="post">
        <div class="form-group col-sm-12 col-md-6">
          <label for="inputPassword">Password</label>
          <input type="password" name="password" id="inputPassword" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
          <small id="passwordHelpInline" class="text-muted">Must be 8-20 characters long.</small>
          <input type="submit" name="submit" value="Login" class="mt-2 btn btn-primary">
          <a class="btn btn-dark mt-2" href="index.php">Home</a>
        </div>
      </form>
    </div>



  </body>
</html>

<?php
exit();
endif;
?>