<html>
  <head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

  </head>

  <body>

    <?php
      $servername = "localhost";
      $username = "admin";
      $password = "password";

      // Create connection
      $conn = mysqli_connect($servername, "admin", "password", 'PortfolioDB');

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      $sql = 'SELECT Email, Password FROM User WHERE ID = 1';
      $result = $conn->query($sql);
      $row = mysqli_fetch_array($result);

      if ( $_POST["email"] == $row[0] && $_POST["password"] == $row[1] ) {
        session_start();
        $_SESSION['logged_in'] = 'true';
        header("Location: addPost.html");
      }
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Louie Ormston</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="information.php#Portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="information.php#Education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="information.php#Education">Experience</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="row centerCards">
      <div class="col-sm-12">
        <div class="formCard">
          <h2 id="pageTitle">Admin Login</h2>
          <form action="login.php" method="post">
            <p>Email : <input type="email" name="email"></p>
            <p>Password : <input type="password" name="password"></p>
            <p class="alert alert-danger">Incorrect Login</p>
            <p><input type="submit" name="submit" value="Submit"></p>
          </form>
        </div>
      </div>
    </div>


    <footer>
      <div class="row footer-row">
        <div class="col-sm-3">
          <a href="https://louie-ormston-portfolio.herokuapp.com/">My Real Portfolio</a>
        </div>
        <div class="col-sm-3">
          <a href="information.php#Portfolio">Portfolio</a>
        </div>
        <div class="col-sm-3">
          <a href="information.php#Portfolio">Education</a>
        </div>
        <div class="col-sm-3">
          <a href="#">Blog</a>
        </div>
        <div class="col-sm-12">
          <p>Designed & Loved by Louie Ormston</p>
        </div>

        <div class="col-sm-12">
          <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true')
          { ?>
           <a href="logout.php"> Log out</a>
         <?php } ?>
          <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'false')
           { ?>
            <a href="login.html"> Log In</a>
          <?php } ?>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
  </body>
</html>
