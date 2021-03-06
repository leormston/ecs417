<!DOCTYPE html>
<html>
  <head>
    <title>Louie Ormston</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

  </head>

  <body>
    <?php   session_start(); ?>
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
            <a class="nav-link" href="viewBlog.php">Blog</a>
          </li>
        </ul>
      </div>
    </nav>

    <section>
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light " id="TopContainerImage">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 font-weight-normal">2 Hours...</h1>
          <p class="lead font-weight-normal">Thats all it took to make this beautiful site.</p>
          <a class="btn btn-outline-secondary" href="#">See other projects</a>
        </div>
      </div>
    </section>

    <main>
      <div class="row">
        <div class="col-sm-4 cardpad">
          <section class="displayCard ">
            <header>
            <h3>Education</h3>
          </header>
            <hr>

            <article>
              <p>He studyied Physics, Computer Science and Economics at A-Level and is currently
              studying Computer Science at Degree Level. </p>
              <a class="btn btn-outline-light" href="information.php#Education">Find out more</a>
            </article>

          </section>
        </div>
        <div class="col-sm-4 cardpad">
          <section class="displayCard">
            <header>
              <h3>Portfolio</h3>
            </header>
            <hr>
            <article>
              <p>This boys got several titles under his belt. They all start with www. </p><br>
              <a class="btn btn-outline-light" href="information.php#Portfolio">www. what?</a>
            </article>
          </section>
        </div>
        <div class="col-sm-4 cardpad">
          <section class="displayCard">
            <header>
              <h3>Experience</h3>
            </header>
            <hr>
            <article>
              <p>What could a first year possibly have done to impress you?</p><br><br>
              <a class="btn btn-outline-light" href="information.php#Experience">This is what..</a>
            </article>
          </section>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-9">
          <div class="displayCard-Light blogCardStyle">
            <div class="JustifyLeft">
            <h2>Also I've got a blog</h2>
            </div>
            <hr>
            <p>Yeah I've got a blog where I can post stuff so I'd make sure to bookmark this page if you really want to
            stay up to date with all the interesting things I'm going to post</p>
            <a class="btn btn-outline-secondary"  href="#">Lets see the blog.</a>
            <br>
            <br>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="displayCard-Light blogCardStyle">
            <img src="images/Me.jpg" width="100%" class="overflow-hidden" height="200px">
          </div>
        </div>
      </div>
    </main>

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
</html>
